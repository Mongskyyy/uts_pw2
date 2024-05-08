<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  session_start();
  include 'header.php';


  ?>
  <div class="container">
    <div class="row">
      <div class="col s6">
        <h5>Tentang ADAFlorist</h5>
        <p>Adaflorist adalah Aplikasi yang menjadi sarana untuk para pembeli atau pecinta tanaman hias untuk menemukan tanaman hias yang mereka inginkan ,
          diharapakan aplikasi dapat membantu para pembeli atau pecinta tanaman untuk mempermudah para pecinta tanaman hias ataupun kolektor tanaman hias dalam membeli tanaman hias tanpa perlu mendatangi tempat penjualan tanaman hias.</p>

      </div>
      <div class="col s6">
        <h5>Hubungi Kami</h5>
        <p>Email : kelompok5@gmail.com</p>
        <p>Twitter : @adaflorist</p>
        <p>Facebook : adaflorist@gmail.com</p>
      </div>

      <div class="col s12">
        <h5 align="center">Tim Pengembang</h5>
      </div>

      <ul class="collection">
        <li class="collection-item avatar">
          <img src="image/ardi.png" alt="" class="circle" height="100px" width="100px">
          <h4>Ramadhan Ardi Iman Prakoso</h4>
          <strong>
            <h5>Project Manager, Back-End Programmer</h5>
          </strong>
          <p>line : ardizzz_ <br>
            IG : ardizzz_
          </p>
          <a class="secondary-content"><i class="material-icons">perm_identity</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="image/ande.jpg" alt="" class="circle medium">
          <h4>Novianto Andi Hardiansyah</h4>
          <strong>
            <h5>Dokumentasi, Gamers</h5>
          </strong>
          <p>line : @andi.hrdnsyahh <br>
            IG : andi.hrdnsyahh
          </p>
          <a class="secondary-content"><i class="material-icons">perm_identity</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="image/anin.jpg" alt="" class="circle">
          <h4>Anindha Latiefa Zahra</h4>
          <strong>
            <h5>Front-End, Back-End Programmer</h5>
          </strong>
          <p>line : @anindhaalz <br>
            IG : anindhaalz
          </p>
          <a class="secondary-content"><i class="material-icons">perm_identity</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="image/jalpe.jpg" alt="" class="circle">
          <h4>Zalfa Dewi Zahrani</h4>
          <strong>
            <h5>Front-End Designer</h5>
          </strong>
          <p>line : zalfadzzz<br>
            IG : zalfadzzz
          </p>
          <a class="secondary-content"><i class="material-icons">perm_identity</i></a>
        </li>
      </ul>

    </div>
  </div>

  <?php
  include 'footer.php';

  ?>

</html>