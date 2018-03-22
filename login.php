<?php
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
   if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if($login == ''){
      $error[] = "Login nie moze byc pusty <br>";
    }

    if($haslo == ''){
      $error[] = "Hasło nie może być puste";
    }


    if(!empty($_POST['login']) && !empty($_POST['haslo'])):
      $sql = "SELECT * FROM users WHERE login='$login' AND pass='$haslo'";
    	$records = $DB_con->prepare($sql);
      $records->execute();


    	// $message = '';
      if(isset($records)){
        if (!$records->rowCount() == 0) {
          while ($results = $records->fetch()) {
          $_SESSION['nazwa'] = $results['login'];

          header('location: mainik.php');
        }
    	} else {

        // echo '<span style="color:red"> Wstęp wzbroniony</span>';
        //header('location: login.php');
        $error[] = "Wstęp wzbroniony";
    	}
}
    endif;
  }
    //
    //
    // $login = $_POST['login'];
    // $haslo = $_POST['haslo'];
    //
    //
    // $sql = "SELECT * FROM users WHERE login='$login' AND pass='$haslo'";
    // if($rezultat = $DB_con->query($sql)):
    // $rezultat->execute();
    // $wynik = $rezultat->fetch(PDO::FETCH_ASSOC);
    // // print_r($wynik);
    // if(count($wynik) > 0) {
    //
    //   echo "zalogowales sie";
    // }
    // else{
    //   die("niepoprawny login lub haslo");
    // }
    // endif;
    //
    // $conn = null;
?>

<!doctype html>

<html lang="en">
<head>
  <link rel="Shortcut icon" href="https://image.ibb.co/nG90QG/logo.png" />
  <meta charset="utf-8">

  <title>Logowanie</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">


</head>

<body>

      <div class="container">

        <div class="witam">

          <div class="log">

              <form action="" method="post" class="form-horizontal">
                <div class="zaloguj">
                <h1> Zaloguj się </h1>
                </div>

                  <div class=" form-input">
                    <input class="eniu" type="text" name="login" placeholder="Nazwa użytkownika" autofocus>
                  </div>
                  <div class=" form-input">
                      <input class="eniu" type="password" name="haslo" placeholder="Hasło">
                  </div>
                  <div>
                      <input class="button" type="submit" name="submit" value="Zatwierdź" class="btn-login">
                  </div>

            </form>

      </div>
      <?php
        if(isset($error)){
      ?>
      <div class="alert alert-danger" style="margin-top:30px; text-align:center; ">
        <span><?php
        foreach ($error as $blad) {
          echo $blad;
        }
        ?></span>
      </div>
      <?php
    }
      ?>
      
</body>
</html>
