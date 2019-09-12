<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $judul ?></title>

  <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.css">

  <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style1.css">
  <link href="<?= base_url(); ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('home/index'); ?>">Akademik Unpad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              API List
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url() ?>mahasiswa/MahasiswaMaster/dosen">Dosen</a>
              <a class="dropdown-item" href="<?= base_url() ?>mahasiswa/MahasiswaMaster/mahasiswa">Mahasiswa</a>
              <a class="dropdown-item" href="<?= base_url() ?>mahasiswa/MahasiswaMaster/mataKuliah">Mata Kuliah</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url() ?>kepegawaian/KepegawaianMaster/absensi">Absensi</a>
              <a class="dropdown-item" href="<?= base_url() ?>kepegawaian/KepegawaianMaster/jabatan">Jabatan</a>
              <a class="dropdown-item" href="<?= base_url() ?>kepegawaian/KepegawaianMaster/karyawan">Karyawan</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url() ?>perpustakaan/PerpustakaanMaster/anggota">Anggota</a>
              <a class="dropdown-item" href="<?= base_url() ?>perpustakaan/PerpustakaanMaster/buku">Buku</a>
              <a class="dropdown-item" href="<?= base_url() ?>perpustakaan/PerpustakaanMaster/transaksi">Transaksi</a>
              <div class="dropdown-divider"></div>
            </div>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>contact">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-5 mr-n5">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login/logout') ?>">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>