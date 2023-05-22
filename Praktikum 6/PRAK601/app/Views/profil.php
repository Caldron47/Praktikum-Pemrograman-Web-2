<!DOCTYPE html>
<html>
<head>
  <title>Halaman Profil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .profile-image {
      max-width: 200px;
      height: auto;
      margin-bottom: 20px;
    }
    body {
      background-image: url("../images/bg.png");
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/home/index">Beranda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Profil</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <h1>Profil Saya</h1>
    <img src="<?= base_url('images/' . $foto) ?>" alt="Profil" class="profile-image">
    <p>Nama: <?= $nama; ?></p>
    <p>NIM: <?= $nim; ?></p>
    <p>Asal Prodi: <?= $prodi; ?></p>
    <p>Hobi: <?= $hobi; ?></p>
    <p>Skill: <?= $skill; ?></p>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
