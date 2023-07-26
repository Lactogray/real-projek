<?php
// Sambung ke database
$conn = mysqli_connect("localhost","root","","simantau_db");


// bikin function

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {;
    $rows[] = $row;
    }

    return $rows;
}

$pelatihan = query("SELECT * FROM tb_daftar_pelatihan");

?>














<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Landing Page</title>
  </head>
  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">SIMANTAU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Login <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link btn btn-primary text-white tombol" href="#">Register</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Aplikasi Pemantauan Pelatihan Para Guru</h1>
        <a href="#" class="btn btn-info btn-lg tombol">Silahkan Bergaabung</a>
      </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <blockquote class="blockquote text-center">
        <p class="mb-0">SILAHKAN MELIHAT</p>
        <footer class="blockquote-footer"> daftar pelatihan <cite title="Source Title">Guru</cite></footer>
      </blockquote>
      <!-- info panel -->
      <div class="row justify-content-center">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pelatihan</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Tanggal Pelatihan</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; ?>
          <?php foreach($pelatihan as $pelatihan1) : ; ?>
            <tr>
         <td><?= $i ?></td>
        <td><?= $pelatihan1["nama_pelatihan"] ?></td>
        <td><?= $pelatihan1["lokasi"] ?></td>
        <td><?= $pelatihan1["tanggal_mulai"] ?></td>
        <td><?= $pelatihan1["deskripsi"] ?></td>
        <td>
        <a class="nav-item nav-link btn btn-danger text-white tombol" href="#">DAFTAR</a>
        
          </td>
          </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- akhir info panel -->




      <!-- Workingspace -->
      <div class="row workingspace">
        <div class="col-lg-6">
          <img src="img/workingspace.png" alt="Working Space" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h2>You <span>Work</span> Like at <span>Home</span></h2>
          <p>Bekerja dengan suasana hati yang lebih asik, menyenangkan
            dan mempelajari hal baru setiap harinya.</p>
          <a href="#" class="btn btn-primary tombol">Gallery</a>
        </div>
      </div>
      <!-- akhir Workingspace -->


      <!-- Testimonial -->
      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"Bekerja dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <img src="img/img1.png" alt="Testimonial 1">
            <img src="img/img2.png" alt="Testimonial 2" class="img-main">
            <img src="img/img3.png" alt="Testimonial 3">
          </div>
        </div>
        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <h5>Sunny Ye</h5>
            <p>Designer</p>
          </div>
        </div>
      </section>
      <!-- akhir Testimonial -->


    </div>
    <!-- akhir container -->




    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>