<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sopranos";
//connect to db
$conn = mysqli_connect($servername, $username, $password, $dbname);

$Postcode = $_POST['postcode'];
$Naam = $_POST['naam'];
$Email = $_POST['email'];
$Tel = $_POST['tel'];
$Bezorginstructies = $_POST['bezorginstructies'];
$Datum = date("Y-m-d h:i:s");

$Prijs = $_POST['prijs'];
$sql = "INSERT INTO `bestelling` (`Postcode`, `Naam`, `Email`, `Tel`, `Bezorginstructies`, `Datum`, `Prijs`) VALUES (?, ?, ?, ?, ?, ?, ?)";
$statement = $conn->prepare($sql);
$statement->bind_param(
  "ssssssi",
  $Postcode,
  $Naam,
  $Email,
  $Tel,
  $Bezorginstructies,
  $Datum,
$Prijs
);
$statement->execute();

$message = "Bestelling geplaatst!";
echo "<script type='text/javascript'>const msg = alert('$message')</script>";

// $sql = "INSERT INTO bestelling (Postcode, Naam, Email, Tel, Bezorginstructies) VALUES ('$Postcode', '$Naam', '$Email', '$Tel', '$Bezorginstructies')";

header("refresh:2; url=index.php");
 