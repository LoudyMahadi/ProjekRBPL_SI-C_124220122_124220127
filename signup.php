<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - PAGE</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Style css -->
    <link rel="stylesheet" href="css/styleSignup.css">
</head>
<body>
    <!-- Login -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-8" style="background-image: url('asset/bg-loginn.jpg'); background-size: cover;height: 100vh;">
            
          </div>
          <div class="col-4 class-input">
            <div class="judul">
                <h3>Welcome.</h3>
                <p>Silahkan Masukan Akun Anda</p>
            </div>
            <form action="proses/signup.php" method="POST">
            <div class="input">
                <div class="username">
                    <label>Usename</label><br>
                    <input type="text" name="username">
                </div>
                <div class="email">
                    <label>Email</label><br>
                    <input type="email" name="email">
                </div>
                <div class="password">
                    <label>Password</label><br>
                    <input type="password" name="password">
                </div>
                <div class="button">
                  <p>Belum punya akun?<a href="login.php" style="text-decoration: none;"> Login</a></p>
                  <button name="submit">Submit</button>
                </div>
            </div>
          </form>
          </div>
        </div>
      </div>


    <!-- Js Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>