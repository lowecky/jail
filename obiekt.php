<!doctype html>
<html lang="en">
<head>
  <link rel="Shortcut icon" href="https://image.ibb.co/nG90QG/logo.png"/>
  <meta charset="utf-8">

  <title>Strona Główna</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
                    <a class="nav1 nav-link">Witaj:   <?php
                      session_start();
                      echo $_SESSION['nazwa'];
                      ?></a>
              </li>
          </ul>
      </div>
  </nav>
  <div class="container">
    <div class="mx-auto">
  <form action="/action_page.php">
  <select name="blok">
    <option value="BA">Blok A</option>
    <option value="BB">Blok B</option>
  </select>
  <select name="sekcja">
    <option value="north">Północna</option>
    <option value="east">Wschodnia</option>
    <option value="south">Południe</option>
    <option value="west">Zachód</option>
  </select>
  <select name="cela">
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
  <input type="submit">
</form>
</div>
</div>

<!-- <div class="zadyma">
      <img src="logo.png">

</div> -->

<!-- <div class="obiekt">
    <img src="obiekt.jpg">
</div> -->

</body>
</html>
