<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'coffee';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Payment form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $payment_method = $_POST['payment_method'];
    $amount = $_POST['amount'];

    // Insert payment into database
    $sql = "INSERT INTO payments (payment_method, amount) VALUES ('$payment_method', '$amount')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Payment successful!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}

// Close connection
$conn->close();
?>
<head>
<title>Payment</title>
</head>
<style>
    
    body {
        font-family: Arial, sans-serif;
        background-color: #000; /* Black background */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    form {
        background-color: #333; /* Dark gray background */
        padding: 20px;
        border: 1px solid #444;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    label {
        display: block;
        margin-bottom: 10px;
        color: #fff; /* White text */
    }
    select, input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #444;
        background-color: #333; /* Dark gray background */
        color: #fff; /* White text */
    }
    input[type="submit"] {
        background-color: #4CAF50; /* Green background */
        color: #fff; /* White text */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #3e8e41; /* Darker green background */
    }
</style>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="payment_method">Payment Method:</label>
    <select name="payment_method" id="payment_method">
        <option value="dana">DANA</option>
        <option value="shoppepay">ShopeePay</option>
        <option value="bank_transfer">Bank Transfer</option>
    </select><br><br>
    <label for="amount">Amount:</label>
    <input name="amount" id="amount" type="number"><br><br>
    <input value="Make Payment" type="submit">
</form>
