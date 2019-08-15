<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $judul ?></title>

  <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.css">

  <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style1.css">


</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>">Akademik Unpad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              API Mahasiswa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url() ?>mahasiswa/MahasiswaMaster/dosen">Dosen</a>
              <a class="dropdown-item" href="<?= base_url() ?>mahasiswa/MahasiswaMaster/mahasiswa">Mahasiswa</a>
              <a class="dropdown-item" href="<?= base_url() ?>mahasiswa/MahasiswaMaster/mataKuliah">Mata Kuliah</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>