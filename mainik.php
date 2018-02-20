<?php
// header('Location: http://localhost/jail/login.php');

session_start();

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

if(isset($_POST['search'])){
 $szukaj = $_POST['search'];

 if(!empty($_POST['search'])):
   $sql = "SELECT * FROM wiezien WHERE imie='$szukaj' OR nazwisko='$szukaj'";
   $records = $DB_con->prepare($sql);
   $records->execute();


   // $message = '';

  //  if($results > 0){
   //
  //    $imie = $results;
  //    echo $imie['imie'];
  //  } else {
   //
  //    // echo '<span style="color:red"> Wstęp wzbroniony</span>';
  //    //header('location: login.php');
  //    $error[] = "Wstęp wzbroniony";
  //  }


 endif;
}
 ?>


<!doctype html>

<html lang="en">
<head>
  <?php
   //echo "   ".$_POST['login'];
   ?>
  <meta charset="utf-8">
  <link rel="Shortcut icon" href="https://image.ibb.co/nG90QG/logo.png" />
  <title>Strona Główna</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/stajlo.css">


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
              <li class="nav-item">
                  <a class="nav-link" href="pomoc.php">Dodaj więźnia</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="warta.php">Warta</a>
              </li>
            <li class="nav-item">
                  <a class="nav1 nav-link">Witaj:   <?php
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
      <div class="mx-auto mr-t">
      <form action="" method="post" class="form-inline">
        <input class="form-control mr-sm-2 cos" type="search" placeholder="Wyszukaj" aria-label="Search" style="width: 400px;" name="search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Szukaj</button>
      </form>
    </div>
  </div>



    <?php
    if (isset($records)) {

      if (!$records->rowCount() == 0) {
          while ($results = $records->fetch()) {

          echo '<div class="container dym">';
          echo'<div class="card card-cascade">';


            echo'<div class="view overlay hm-white-slight">';
            echo'<img src="zdziszek.jpg" class="img-fluid" alt="">';
            echo'<a>';
                echo '<div class="mask"></div>';

            echo'</a>';

          echo'</div>';

          echo'<div class="card-body text-center">';

            echo'<h4 class="card-title">'.'<strong>'. $results['imie'] . ' ' . $results['nazwisko'] .'</strong>'.'</h4>';
            echo'<h5>' . 'wiek: ' .  $results['wiek'] .  '</h5>';

            echo  '<p class="card-text">' . '<strong>' . 'wyrok: ' . '</strong>' . $results['wyrok'] . '</p>';

          echo  '</div>';
          echo  '</div>';

          }
      } else {
          echo '<h1 class="alert">'.'Wiezien nie znaleziony (moze uciekl)'.'<h1>';
      }
    }

     ?>


  </div>
</body>
</html>
