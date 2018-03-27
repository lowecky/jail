<?php
session_start();
 if(!isSet($_SESSION['nazwa'])) {
 $komunikat = "Nie byłeś zalogowany!!!";
}

 else{
 unset($_SESSION['nazwa']);
 $komunikat = "Wylogowanie prawidłowe!";
}

session_destroy();
?>

<html>
<head>
</head>
<body>
<?php echo $komunikat ?>
</body>
</html>
