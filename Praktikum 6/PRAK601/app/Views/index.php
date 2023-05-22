<!DOCTYPE html>
<html>
<head>
  <title>Halaman Beranda</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("../images/bg.png");
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Beranda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home/profil">Profil</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <h1>Selamat datang di halaman beranda!</h1>
    <p>Nama: <?= $nama; ?></p>
    <p>NIM: <?= $nim; ?></p>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
