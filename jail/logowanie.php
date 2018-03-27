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
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if(!empty($_POST['login']) && !empty($_POST['haslo'])):
      $sql = "SELECT count(*) FROM users WHERE login='$login' AND pass='$haslo'";
    	$records = $DB_con->prepare($sql);
      $records->execute();
    	$results = $records->fetchColumn();

    	// $message = '';

    	if($results > 0){


    		header('location: mainik.html');

    	} else {

        // echo '<span style="color:red"> Wstęp wzbroniony</span>';
        //header('location: login.php');
        echo "nie prawuidłowy";
    	}

    endif;
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
