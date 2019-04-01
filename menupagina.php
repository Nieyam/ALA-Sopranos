<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css">
    <title>Menu</title>
  </head>

  <nav> <!-- Hier begint de NAV bar -->
    <ul>
        <li><a href="index.php">Welkom</a></li>
        <li><a href="menupagina.php">Menu</a></li>
        <li><a href="bestelpagina.php">Bestellen</a></li>
    </ul>
 </nav> <!-- Hier eindigt de NAV bar -->

  <body>
    <h1>Menu</h1>
    <input required type="text" name="naam" placeholder="Vul uw volledige naam in">

  </body>
</html>

<!--PHP-->
<?php
//CSS
echo "<link rel='stylesheet' href='style.css'>";
?>
