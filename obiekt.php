<?php
// header('Location: http://localhost/jail/login.php');

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

if(isset($_POST['blok'])){
 $blok = $_POST['blok'];
}

if(isset($_POST['sekcja'])){
  $sekcja = $_POST['sekcja'];
}

if(isset($_POST['cela'])){
   $cela = $_POST['cela'];
 }

 if(!empty($_POST['dropdown'])):
   $sql = "SELECT * FROM wiezien WHERE Blok='$blok' AND Sekcja='$sekcja' AND Cela='$cela'";
   $records = $DB_con->prepare($sql);
   $records->execute();

//this is the same code as used in the search function but adapted to use the options from the form instead of the results of a search

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

 ?>

<!doctype html>
<html lang="en">
<head>
  <link rel="Shortcut icon" href="https://image.ibb.co/nG90QG/logo.png"/>
  <meta charset="utf-8">

  <title>Strona Główna</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/stajlo.css">
  <link rel="stylesheet" type="text/css" href="css/obiekt.css">


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
              <li class="nav-item active">
                  <a class="nav-link" href="obiekt.php">Obiekt</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pomoc.php">Dodaj więźnia</a>
              </li>
              <li class="nav-item">
                          <a class="nav-link" href="warta.php">Warta</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="https://www.paypal.me/arek2597">Donate to our prison</a><!--link needs details -->
              </li>
              <li class="nav-item">
                    <a class="nav1 nav-link">Witaj:   <?php
                      session_start();
                      echo $_SESSION['nazwa'];
                      ?></a>
                      <li>
              <a class="nav1 nav-link" href="logout.php">Wyloguj się</a>
                      </li>
              </li>
          </ul>
      </div>
  </nav>
  <div class="container"
    <?php
      if(!empty($_POST['dropdown'])){
        echo 'style="margin-top: auto;"';
      }
        ?>
      >
    <div class="mx-auto">
  <form action="" method="post" class="form-control" style="background-color: transparent; border: 0px;">
  <ul>
  <li style="padding: 10px;">
    <select name="blok" class="form-control mr-sm-2 cos">
      <option value="BA">Blok A</option>
      <option value="BB">Blok B</option>
    </select>
  </li>
  <li style="padding: 10px;">
    <select name="sekcja" class="form-control mr-sm-2 cos">
      <option value="north">Północna</option>
      <option value="east">Wschodnia</option>
      <option value="south">Południe</option>
      <option value="west">Zachód</option>
    </select>
  </li>
  <li style="padding: 10px;">
    <select name="cela" class="form-control mr-sm-2 cos">
      <option value="pierwsza">Cela 1</option>
      <option value="druga">Cela 2</option>
      <option value="trzecia">Cela 3</option>
      <option value="czwarta">Cela 4</option>
      <option value="piata">Cela 5</option>
      <option value="szosta">Cela 6</option>
      <option value="siodma">Cela 7</option>
      <option value="osma">Cela 8</option>
      <option value="dziewiata">Cela 9</option>
      <option value="dziesiata">Cela 10</option>
    </select>
  </li>
  <input class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="dropdown" style="margin-left: 25%;"><!-- this is to check if the user has submitted the form before running any queries -->
</form>
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
      echo '</div>'.'<div class="errorMessage">'.'<h1 class="alert">'.'Wiezien nie znaleziony (moze uciekl)'.'<h1>'.'</div>';
  }
}

//once again, the same code from the search function
//there was no need to change this because it does exactly what we want it to here

 ?>

</div>

<!-- <div class="zadyma">
      <img src="logo.png">

</div>

<!-- <div class="obiekt">
    <img src="obiekt.jpg">
</div> -->

</body>
</html>
