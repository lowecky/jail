<!doctype html>
<?php
    /*if(!isset($_SESSION['username'])) {
    header("Location:Login.php");
}   else {
    header("Location:pomoc.php");
}
*/
?>
<html lang="en">
<head>
  <link rel="Shortcut icon" href="https://image.ibb.co/nG90QG/logo.png" />
  <meta charset="utf-8">

  <title>Strona Główna</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/dodaj.css">


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark indigo">
      <a class="navbar-brand" href="mainik.php">Więzienie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="obiekt.php">Obiekt</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="pomoc.php">Dodaj więźnia</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="warta.php">Warta</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://www.paypal.me/arek2597">Wesprzyj nas</a>
              </li>
              <li class="nav-item">
                    <a class="nav1 nav-link">Witaj:   <?php
                    session_start();
                      echo $_SESSION['nazwa'];
                      ?></a>
              </li>
          </ul>
      </div>
  </nav>

<!-- <div class="zadyma">
      <img src="logo.png">
</div> -->
<div class="container sztos">
  <?php

  require_once "connect.php";
  try
  {
       $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
       $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e)
  {
       die("Polaczenie z baza danych przerwane: " . $e->getMessage());
  }

  if(isset($_POST['submit'])){
   $imie = $_POST['imie'];
   $nazwisko = $_POST['nazwisko'];
   $wiek = $_POST['wiek'];
   $wyrok = $_POST['wyrok'];
   $adres = $_POST['adres'];
   $city = $_POST['city'];
   $blok = $_POST['blok'];
   $sekcja = $_POST['sekcja'];
   $cela = $_POST['cela'];


   if($imie == ''){ $error[] = "Wprowadź Imie <br>"; }
   if($nazwisko == ''){ $error[] = "Wprowadź Nazwisko <br>"; }
   if($wiek == ''){ $error[] = "Wprowadź wiek <br>"; }
   if($wyrok == ''){ $error[] = "Wprowadź Wyrok <br>"; }
   if($adres == ''){ $error[] = "Wprowadź Adres <br>"; }
   if($city == ''){ $error[] = "Wprowadź Miejscowość"; }
   if($blok == ''){ $error[] = "Wprowadź cela blok"; }
   if($sekcja == ''){ $error[] = "Wprowadź sekcja"; }
   if($cela == ''){ $error[] = "Wprowadź cela numer"; }

  }


      if(!empty($_POST['imie']) && !empty($_POST['nazwisko'])
      && !empty($_POST['wiek']) && !empty($_POST['wyrok'])
      && !empty($_POST['adres']) && !empty($_POST['city'])
      && !empty($_POST['blok']) && !empty($_POST['sekcja'])
      && !empty($_POST['cela'])){

          $sql = "INSERT INTO wiezien (imie, nazwisko, wiek, wyrok, adres, miasto, Blok, Sekcja, Cela)
                  VALUES ('$imie' , '$nazwisko' , '$wiek' , '$wyrok' , '$adres' , '$city' , '$blok' , '$sekcja' , '$cela')";
          $records = $DB_con->prepare($sql);
          $records->execute();
  }


  ?>


    <div class="mx-auto mr-t" >
      <form action="" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Imię</label>
            <input type="text" class="form-control" id="inputEmail4" name="imie" placeholder="Imię">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nazwisko</label>
            <input type="text" class="form-control" id="inputPassword4" name="nazwisko" placeholder="Nazwisko">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Wiek</label>
            <input type="text" class="form-control" id="inputPassword4" name="wiek" placeholder="Wiek">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Blok</label>
            <input type="text" class="form-control" id="inputEmail4" name="blok" placeholder="Blok">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Sekcja</label>
            <input type="text" class="form-control" id="inputEmail4" name="sekcja" placeholder="Sekcja">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Cela</label>
            <input type="text" class="form-control" id="inputEmail4" name="cela" placeholder="Cela">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Wyrok</label>
          <input type="text" class="form-control" id="inputAddress" name="wyrok" placeholder="Wyrok">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Adres</label>
          <input type="text" class="form-control" id="inputAddress2" name="adres" placeholder="Adres">
        </div>

        <div class="form-group">

          <div class="row justify-content-start">
            <div class="col-4">
              <label for="inputCity">Miejscowość</label>
              <input type="text" class="form-control" id="inputCity" name="city" placeholder="Miejscowość">
          </div>
      </form>
    </div>
    <div class="row justify-content-center">
        <button type="submit" name="submit" class="dodaj btn btn-primary">Dodaj Więźnia</button>
    </div>

        <?php
          if(isset($error)){
        ?>
        <div class="alert alert-danger  justify-content-center;" style="margin-top:30px">
          <span><?php
          foreach ($error as $blad) {
            echo $blad;
          }
          ?></span>
        </div>
        <?php
      }
        ?>


</div>
</body>
</html>
