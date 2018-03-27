<?php

  session_start();

  if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
  {
    header('Location: login.php');
    exit();
  }

  require_once "connect.php";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
  echo "Error: ".$polaczenie->connect_errno;
}

else
{

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "SELECT * FROM loginyihasla WHERE login='$login' AND haslo='$haslo'";


}

if ($wynik = @$polaczenie->query($sql))
{
  $ile = $wynik->num_rows;
  if($ile>0)
  {
    $_SESSION['zalogowano'] = true;


    $wiersz = $wynik->fetch_assoc();
    $_SESSION['id'] = $wiersz['id'];
    $_SESSION['imie'] = $wiersz['imie'];
    $_SESSION['nazwisko'] = $wiersz['nazwisko'];
    $_SESSION['loginzmienna'] = $wiersz['login'];
    unset($_SESSION['blad']);
    $wynik->free_result();
    header('Location: mainik.php');

  }else{
    $_SESSION['blad']='<div class="alert alert-danger" role="alert">
                        <strong>Błąd logowania!</strong> Niepoprawny login i/lub hasło.
                        </div>';
                        header('Location: login.php');

  }
}

$polaczenie->close();
?>
