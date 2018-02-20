<!doctype html>

<html lang="en">
<head>
  <link rel="Shortcut icon" href="https://image.ibb.co/nG90QG/logo.png" />
  <meta charset="utf-8">

  <title>Warta</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/warta.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">


</head>

<body>
  <div class="wartix">
  <nav class="navbar navbar-expand-lg navbar-dark indigo">
      <a class="navbar-brand" href="mainik.php">Więzienie</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="obiekt.php">Obiekt</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="pomoc.php">Dodaj więźnia</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="warta.php">Warta</a>
              </li>
              <div class="xD">
              <li class="nav-item">
                    <a class="nav1 nav-link">Witaj:   <?php
                    session_start();
                      echo $_SESSION['nazwa'];
                      ?></a>
                    </div>
              </li>
          </ul>
      </div>
    </div>
      <div class="warta">
      <p> Koniec warty nastąpi za: </p>
      <p id="demo"></p>
      <script>

      var target = new Date();
      target.setHours(target.getHours() + 6);

      var x = setInterval(function() {

        var now = new Date().getTime();


        var distance = target - now;


        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        document.getElementById("demo").innerHTML = hours + "h "
        + minutes + "m " + seconds + "s";


        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Warta zakończona";
        }
      }, 1000);
      </script>
      ?>
    </div>
</body>
</html>
