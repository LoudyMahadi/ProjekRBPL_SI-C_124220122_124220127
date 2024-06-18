<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio Kopi</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Radio<span>Kopi</span></a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">Produk</a>
    </div>

    <div class="navbar-extra">
      <a href="logout.php" id="shopping-cart-button"><i data-feather="log-out"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search Form start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- Search Form end -->
  </nav>

  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <div class="mask-container">
      <main class="content">
        <h1>Radio <span>Kopi</span> Ngopi Disit Bos!</h1>
        <p>Radio Kopi adalah sebuah konsep kafe yang menggabungkan suasana nyaman untuk menikmati kopi dengan alunan musik yang disiarkan secara 
          langsung melalui radio atau platform streaming. Kafe ini tidak hanya menawarkan berbagai macam varian kopi, mulai dari espresso, latte, hingga kopi spesial dengan resep unik, tetapi juga menyajikan pengalaman audio yang menenangkan dan menghibur.</p>
      </main>
    </div>
  </section>
  <!-- Hero Section end -->

  <!-- About Section start -->
  <section id="about" class="about">
    <h2><span>About</span> Us</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentang-kami.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa memilih kopi kami?</h3>
        <p>Radio Kopi menawarkan pengalaman unik yang menggabungkan kenikmatan kopi berkualitas dengan alunan musik yang menenangkan. Kami menyajikan berbagai varian kopi yang dibuat dari biji kopi terbaik 
          dan diproses dengan keahlian untuk memastikan setiap cangkir memberikan cita rasa yang sempurna.</p>
        
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- Menu Section start -->
  <section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Disini Kami Menyajikan beberapa Menu Seperti
    </p>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/1.jpg" alt="Espresso" class="menu-card-img">
        <h3 class="menu-card-title">- Espresso -</h3>
        <p class="menu-card-price">IDR 15K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/2.jpg" alt="Cappucino" class="menu-card-img">
        <h3 class="menu-card-title">- Capuccino -</h3>
        <p class="menu-card-price">IDR 20K</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/4.jpg" alt="Latte" class="menu-card-img">
        <h3 class="menu-card-title">- Latte -</h3>
        <p class="menu-card-price">IDR 30K</p>
      </div>
    </div>
  </section>
  <!-- Menu Section end -->

  <!-- Products Section start -->
  <section class="products" id="products">
    <h2><span>Pemesanan</span> Kopi</h2>
    <p>Tempat Pemesanan Kopi Disini ! </p>

    <div class="row">
      <div class="product-card">
        <div class="product-icons">
          <a href="keranjang.php?id=1"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/3.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Espresso</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 15K <span>IDR 30K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="keranjang.php?id=2"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/2.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Cappucino</h3>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>   
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 20K <span>IDR 35K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icons">
          <a href="keranjang.php?id=3";><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/4.jpg" alt="Product 1">
        </div>
        <div class="product-content">
          <h3>Latte</h3>
          <div class="product-stars">
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products Section end -->

  <!-- Footer start -->
  <footer>
    <div class="socials">
      <a href="https://www.instagram.com/radiokopii171"><i data-feather="instagram"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
    </div>  

    <div class="credit">
      <p>Created by <a href="">Kelompok RBPL SI C</a>. | &copy; 2024.</p>
    </div>
  </footer>
  <!-- Footer end -->

  <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/3.jpg" alt="Espresso">
        <div class="product-content">
          <h3>Espresso</h3>
          <p>Espresso adalah minuman kopi pekat yang dibuat dengan mengekstraksi biji kopi halus menggunakan air panas bertekanan tinggi, menghasilkan secangkir kecil kopi sekitar 30 ml dengan rasa kuat dan konsentrasi tinggi. Dikenal dengan lapisan crema berwarna keemasan di atasnya, espresso menjadi dasar bagi berbagai minuman kopi seperti latte, cappuccino, dan macchiato, 
            menawarkan pengalaman kopi murni yang intens dan memuaskan bagi pecinta kopi sejati.</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 15K <span>IDR 30K</span></div>
          <a href="keranjang.php?id=1"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->

  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>

</html>