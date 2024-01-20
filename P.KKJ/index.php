<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PRAKTIKUM KKJ</title>
</head>
<body>
  <header>
    <h1>Frans Dyto Ependri_213510362-5D</h1>
  </header>

  <nav>
    <ul>
      <li><a href="index.php?page=home">Home</a></li>
      <li><a href="index.php?page=encrypt">Enkripsi</a></li>
      <li><a href="index.php?page=decrypt">Dekripsi</a></li>
    </ul>
  </nav>

  <section id="content">
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      if ($page === 'home') {
        include('home.php');
      } elseif ($page === 'encrypt') {
        include('caesar.php');
      } elseif ($page === 'decrypt') {
        include('caesar.php');
      }
    } else {
      include('home.php');
    }
    ?>
  </section>
</body>
</html>
