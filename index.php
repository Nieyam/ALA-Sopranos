<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home - Sopranos Pizza</title>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Pizzeria Soprano's</title>
    <!--Bootstrap Css and Main Css-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/main.css" />

    <!--Favicon-->
    <link rel="icon" href="img/Soprano small.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="img/Soprano small.svg" type="image/x-icon" />
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 400px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
  </head>

  <body>
    <!--Jumbotron feature-->
    <div class="jumbotron paral" id="jumbo">
      <h1 class="text-center">Sopranos Pizza</h1>
    </div>

    <!--Navigation-->
    <div class="container-fluid">
      <nav
        class="navbar navbar-expand-md navbar-light fixed-top"
        data-0="height: 59px;"
        data-100="height: 30px;"
      >
        <a class="navbar-brand" href="index.php"
          ><img
            class="img-fluid logo"
            src="img/Soprano small.svg"
            alt=""
            data-0="width: 80px;"
            data-100="width: 50px;"
            style="width: 50px; transform: scaleX(-1);"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" onclick="location.reload()">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="order.php">Bestellen</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!--Info Container-->
    <div class="container-fluid">
      <h2 class="text-center bot-buffer font-weight-bold" class="headNews">Over Sopranos</h2>
      <div class="row d-flex justify-content-around">
        <div class="card mb-3 col " style="max-width: 18rem;">
          <div class="card-header"></div>
          <div class="card-body">
          <!-- Bekijk ons menu -->
            <a class="card-title" href="menu.php">Menu bekijken</a>
            <p class="card-text">Bekijk <del>ons</del> <ins>jouw</ins> menu!</p>
          </div>
        </div>

        <!-- Bestel een pizza -->
        <div class="card mb-3 col " style="max-width: 18rem;">
          <div class="card-header"></div>
          <div class="card-body">
            <a class="card-title" href="order.php">Pizza bestellen</a>
            <p class="card-text">Bestel een pizza bij Soprano's!</p>
          </div>
        </div>

        <!-- Openingstijden -->
        <div class="card mb-3 col" style="max-width: 18rem;">
          <div class="card-header"></div>
          <div class="card-body">
            <a class="card-title" href="foo.php">Openingstijden</a>
            <p class="card-text">
              Check hier onze openingstijden!
            </p>
          </div>
        </div>
      </div>
      <!--End info container-->

      <!-- Over Soprano's -->
      <div class="container-fluid">
        <h2 class="text-center bot-buffer font-weight-bold" class="headNews">Over Soprano's</h2>
        <div class="row d-flex justify-content-around">
          <div class="card news-card col-3 buffer-small  " style="width: 18rem;">
            <a
              href="#Kom hier nog een link?"
              target="_blank">
              <img src="images/pizzza.png" class="card-img-top news-img" alt="..." style="height:238px"/></a>

            <!-- Soprano's deluxe -->
            <div class="card-body">
              <h4 class="card-text">2019. De nieuwe Sopranos Deluxe.</h4>
              <a
                href="#Kom hier nog een link?"
                target="_blank"
                class="btn btn-news font-weight-bold">
                Bestel NU!</a>
            </div>
          </div>

          <!-- De beste pizza's -->
          <div class="card news-card col-3 buffer-small" style="width: 18rem;">
            <a
              href="#Kom hier nog een link?"
              target="_blank"
              ><img src="images/depizza.jpg" class="card-img-top news-img" alt="..."
            /></a>
            <div class="card-body">
              <h4 class="card-text">De beste pizza's</h4>
              <a
                href="#Kom hier nog een link?"
                target="_blank"
                class="btn btn-news font-weight-bold"
                >Bestel NU!</a>
            </div>
          </div>

          <!-- Laatste Foto? Wat wordt dit ? -->
          <div class="card news-card col-3 buffer-small" style="width: 18rem;">
            <a
              href="#Kom hier nog een link?"
              target="_blank"
            >
              <img src="img/bbq.png" class="card-img-top news-img" alt="..."
            /></a>
            <div class="card-body">
              <h4 class="card-text"></h4>
              <a
                href="#Kom hier nog een link?"
                target="_blank"
                class="btn btn-news font-weight-bold"
                >Bestel NU!</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- prices -->
      <h2 class="text-center bot-buffer font-weight-bold" class="headNews">Onze prijzen</h2>
      <div class="container-fluid row">
        <div class="col-sm"></div>
      <?php
        echo "<table class='text-center col' style='max-width: 80% !important;'>";
        echo "<th>Naam</th> <th>Prijs</th> <th>Grootte</th>";
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo str_replace(".", ",", "<tr> <td>" . $row["Item"] . "</td> <td>€" . ((float)$row["Prijs"]) / 100 . "</td> <td>" . $row["Grootte"] . "</td> </tr>");
          }
        } else {
          echo "Het menu is leeg.";
        }
        echo "</table>";
        
        $conn->close();
        ?>
        <div class="col-sm"></div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <div class="container-fluid" style="width: 100%;">
    <footer class="top-buffer  ">
      <div class="row">
        <div class="col-md-4 footer-name">
          <span class="copyright">Copyright &copy; Pizzeria Soprano's</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/pizzahut" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/PizzaHut/" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/pizzahut/" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
  </body>
</html>
