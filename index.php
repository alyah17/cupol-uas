<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,600;0,700;1,400&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="css/style.css" />
  <title>Foodi</title>
</head>

<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <span>F</span><img class="logo" src="assets/images/logo.svg" alt="Logo" />
    </div>
    <div class="navbar-content">
      <a href="#home">Home</a>
      <a href="#menu">Menu</a>
      <a href="#service">Services</a>
      <a href="#footer">Offers</a>
    </div>
    <div class="navbar-extra">
      <i data-feather="search" class="ico"></i>
      <i data-feather="shopping-bag" class="ico"></i>
      <button>
        <i data-feather="phone" class="icon"></i>
        <span>Contact</span>
      </button>
    </div>
  </nav>

  <section class="home" id="home">
    <div class="col-content">
      <h1>Selami Kelezatan Makanan Yang Super <span>Yummy</span></h1>
      <p>
        Di mana setiap piring menjalin kisah penguasaan kuliner dan keahlian
        yang penuh gairah
      </p>
      <div class="row-content">
        <button class="order">Order Now</button>
        <h4>Watch Video</h4>
        <button class="play"><i data-feather="play" class="icon"></i></button>
      </div>
    </div>

    <div class="img-hero">
      <img src="assets/images/hero-img.png" alt="hero" />
    </div>
  </section>

  <section class="menu" id="menu">
    <div class="head">
      <h4>COSTUMER FAVORITES</h4>
      <h1>Kategori Populer</h1>
    </div>

    <div class="menu-content">
      <div class="menu-container">
        <img src="assets/images/burger.png" alt="Main Dish" />
        <h5>Menu Utama</h5>
        <p>(86 Menu)</p>
      </div>

      <div class="menu-container">
        <img src="assets/images/berakfast.png" alt="Main Dish" />
        <h5>Menu Sarapan</h5>
        <p>(12 Menu)</p>
      </div>

      <div class="menu-container">
        <img src="assets/images/dessert.png" alt="Main Dish" />
        <h5>Menu Dessert</h5>
        <p>(48 Menu)</p>
      </div>

      <div class="menu-container">
        <img src="assets/images/drink.png" alt="Main Dish" />
        <h5>Menu Lainnya</h5>
        <p>(135 Menu)</p>
      </div>
    </div>

    <div class="head-tile">
      <h4>Menu Special</h4>
      <div class="row">
        <h1>
          Rekomendasi Hidangan <br />
          Dari Menu Kami
        </h1>
        <div class="btn">
          <button class="previous-btn">
            <i data-feather="arrow-left"></i>
          </button>
          <button class="next-btn">
            <i data-feather="arrow-right"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="card-dishes">
      <?php
      include_once 'config.php';

      $result = $conn->query("SELECT * FROM makanan");

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?>
          <div class="card">
            <i data-feather="heart" class="heart"></i>
            <center><img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>" /></center>
            <h3>
              <?php echo $row['nama']; ?>
            </h3>
            <p>
              <?php echo $row['deskripsi']; ?>
            </p>
            <div class="card-row">
              <p><span>$</span>
                <?php echo $row['harga']; ?>
              </p>
              <div class="rating">
                <i data-feather="star" class="star"></i>
                <p>4.9</p> <!-- Anda mungkin ingin mengganti ini dengan rating dari database -->
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "Tidak ada makanan.";
      }

      $conn->close();
      ?>
    </div>

    <div class="testimonials">
      <div class="container-img"></div>
      <img src="assets/images/chef.png" alt="chef" />

      <div class="col">
        <h4>Testimoni</h4>
        <h1>
          Yang Pelanggan Kami <br />
          Katakan Tentang Kami
        </h1>
        <p>
          “Saya senang makan di Foodi tadi malam, dan saya masih mengoceh
          tentang pengalaman itu! Perhatian terhadap detail dalam presentasi
          dan layanan adalah Sempurna”
        </p>
      </div>
    </div>
  </section>

  <section class="service" id="service">
    <div class="col-1">
      <h4>LAYANAN KAMI</h4>
      <h1>Perjalanan Kuliner Kami<br />Dan Servis</h1>
      <p>
        Kami mengkurasi pengalaman bersantap yang tak terlupakan <br />
        dan menawarkan layanan yang luar biasa, memadukan kuliner <br />
        dengan keramahan yang hangat.
      </p>
      <button>Explore</button>
    </div>

    <div class="col-2">
      <div class="container">
        <img src="assets/icons/catering.svg" alt="catering" />
        <h4>CATERING</h4>
        <p>Puaskan klien Anda dengan cita rasa dan presentasi kami</p>
      </div>
      <div class="container">
        <img src="assets/icons/catering.svg" alt="catering" />
        <h4>CATERING</h4>
        <p>Puaskan klien Anda dengan cita rasa dan presentasi kami</p>
      </div>
      <div class="container">
        <img src="assets/icons/catering.svg" alt="catering" />
        <h4>CATERING</h4>
        <p>Puaskan klien Anda dengan cita rasa dan presentasi kami</p>
      </div>
      <div class="container">
        <img src="assets/icons/catering.svg" alt="catering" />
        <h4>CATERING</h4>
        <p>Puaskan klien Anda dengan cita rasa dan presentasi kami</p>
      </div>
    </div>
  </section>

  <footer class="footer" id="footer">
    <div class="logo">
      <div class="navbar-logo">
        <span>F</span><img class="logo" src="assets/images/logo.svg" alt="Logo" />
      </div>
      <p>
        Nikmati kehangatannya di mana setiap <br />hidangan adalah kuliner
        mahakarya
      </p>
    </div>

    <div class="link">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>

    <div class="link">
      <h4>Main Menu</h4>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#footer">Foooter</a></li>
      </ul>
    </div>

    <div class="link">
      <h4>Contact Us</h4>
      <ul>
        <li><a href="#">cupolteam@gmail.com</a></li>
        <li><a href="#">+62 81341595570</a></li>
        <li><a href="#">Social Media</a></li>
      </ul>
    </div>
  </footer>

  <div class="copy">
    <center>
      <p>© 2024 Foodi | All Rights Reserved</p>
    </center>
  </div>
  <script>
    feather.replace();
  </script>
</body>

</html>