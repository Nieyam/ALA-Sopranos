<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css">
    <title>Bestellen</title>
  </head>

  <nav> <!-- Hier begint de NAV bar -->
    <ul>
        <li><a href="index.php">Welkom</a></li>
        <li><a href="menupagina.php">Menu</a></li>
        <li><a href="bestelpagina.php">Bestellen</a></li>
    </ul>
 </nav> <!-- Hier eindigt de NAV bar -->

  <body>
    <h1>Bestellen</h1>
        <div id="tekst"> 
        <table cellspacing="2" cellpadding="2">
            <tr>
                <!--Naam-->
                <td> <label> Uw naam: </label> </td>   
                <td> <input required type="text" name="naam" placeholder="Vul uw volledige naam in"> </td>
            </tr>
            <tr>
                <!--Email-->
                <td> <label> Email: </label> </td>
                <td> <input required type="text" name="email" placeholder="Vul uw emailadres in"> </td>
            </tr>
            <tr>
                <!--Telefoonnummer-->
                <td> <label> Telefoonnummer: </label> </td>
                <td> <input required type="number" name="telefoon" placeholder="Vul uw telefoonnummer in"> </td>
            </tr>
            <tr>
                <!--Thuisbezorgd/Afhalen-->
                <td> Thuisbezorgd <input type="radio" name="thuis"> </td>
			    <td> Afhalen <input type="radio" name="afhalen"> </td>
        </table>
        </div>
  </body>
</html>

<!--PHP-->
<?php
//CSS
echo "<link rel='stylesheet' href='style.css'>";
?>
