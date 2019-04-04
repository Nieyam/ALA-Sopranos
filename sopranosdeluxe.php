<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Soprano's Openingstijden</title>

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
    <link rel="icon" href="img/favicon-194x194.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon-194x194.png" type="image/x-icon" />
    <style>
        h2 {
            text-align: center;
            color: white;
        }

        #text {
            text-align: center;
            margin-top: 5%;
        }
    </style>
  </head>

  <body>
            <!--Navigation-->
            <div class="container-fluid">
            <nav
                class="navbar navbar-expand-md navbar-light fixed-top"
                data-0="height: 59px;"
                data-100="height: 30px;">
                <a class="navbar-brand" href="index.php">

                <img
                    class="img-fluid logo"
                    src="img/Soprano small.svg"
                    alt=""
                    data-0="width: 80px;"
                    data-100="width: 50px;" /></a>

                <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarCollapse"
                aria-controls="navbarCollapse"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Home -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <!-- Menu -->
                    <li class="nav-item active">
                    <a class="nav-link" onclick="location.reload()">Menu</a>
                    </li>

                    <!-- Bestellen -->
                    <li class="nav-item">
                    <a class="nav-link" href="order.php">Bestellen</a>
                    </li>
                </ul>
                </div>
            </nav>
            </div>

            <!--Jumbotron feature-->
            <div class="jumbotron paral" id="jumbo">
            <h1 class="text-center">Soprano's Deluxe</h1>
            <h2>Comming Soon!</h2>
            </div>

            <!-- Tekst Soprano's deluxe -->
            <div id="text"><p><h2 style="color:black">Soprano's Deluxe pizza's binnenkort beschikbaar </h2></p></div>
            <br><br><br>

    <!--Footer-->
    <footer class="top-buffer">
        <div class="container">
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
                    <i class="fab 
                   a-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/pizzahut/" target="_blank">
                    <i class="fab fa-instagram"></i>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </footer>
  </body>
</html>
