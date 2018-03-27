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
 $wyrok = $_POST['wyrok'];
 $adres = $_POST['adres'];
 $city = $_POST['city'];
 $blok = $_POST['blok'];
 $sekcja = $_POST['sekcja'];
 $cela = $_POST['cela'];


 if(!empty($_POST['imie'] , $_POST['nazwisko'] , $_POST['wyrok'] , $_POST['adres'] , $_POST['city'])):
   $sql = "INSERT INTO wiezien (imie, nazwisko, wyrok, Adres, Miasto, Blok, Sekcja, Cela)
   VALUES ($imie , $nazwisko , $wyrok , $adres , $city , '$blok' , '$sekcja' , '$cela')";
   $records = $DB_con->prepare($sql);
   $records->execute();

   if($results > 0){


     header('location: mainik.php');

   } else {

     // echo '<span style="color:red"> Wstęp wzbroniony</span>';
     //header('location: login.php');
     $error[] = "Wstęp wzbroniony";
   }

 endif;
}

?>
