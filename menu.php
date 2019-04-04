<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Soprano's Menu</title>

    <!--Bootstrap Css and Main Css-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"/>
    
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"/>
    
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous">
    </script>

    <!--Css link-->
    <link rel="stylesheet" href="css/main.css" />

    <!--Favicon-->
    <link rel="icon" href="img/favicon-194x194.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon-194x194.png" type="image/x-icon" />
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
                src="img/favicon-194x194.png"
                alt=""
                data-0="width: 80px;"
                data-100="width: 50px;"/></a>

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

            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" onclick="location.reload()">Menu</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="order.php">Bestellen</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>

        <!--Jumbotron feature-->
        <div class="jumbotron paral" id="jumbo">
          <h1 class="text-center">Bekijk ons menu!</h1>
        </div>

        <!-- Menu container-->
        <div class="container-fluid">
          <h2 class="text-center bot-buffer font-weight-bold" class="headNews">Menu</h2>
          <div class="row d-flex justify-content-around">
            <div class="card news-card col-3 buffer-small  " style="width: 18rem;">
              <a
                href="#Kom hier nog een link?"
                target="_blank">
                <img src="images/formaggi2.png" class="card-img-top news-img" alt="..."/>
              </a>

              <!--Pizza Formaggi -->
              <div class="card-body">
                <h4 class="card-text">Pizza Formaggi</h4>
                <a
                  href="#Kom hier nog een link?"
                  target="_blank"
                  class="btn btn-news font-weight-bold">
                  Bestellen</a>
              </div>
            </div>

            <!--Pizza Pepperoni -->
            <div class="card news-card col-3 buffer-small" style="width: 18rem;">
              <a
                href="#Kom hier nog een link?"
                target="_blank">
                <img src="images/pepperonii.png" class="card-img-top news-img" alt="..."/>
              </a>
              <div class="card-body">
                <h4 class="card-text">Pizza Pepperoni</h4>
                <a
                  href="#Kom hier nog een link?"
                  target="_blank"
                  class="btn btn-news font-weight-bold">
                  Bestellen</a>
              </div>
            </div>

            <!--Pizza Garnaal -->
            <div class="card news-card col-3 buffer-small" style="width: 18rem;">
              <a
                href="#Kom hier nog een link?"
                target="_blank">
                <img src="images/prawn.png" class="card-img-top news-img" alt="..."/> </a>
              <div class="card-body">
                <h4 class="card-text">Pizza Prawn Crab</h4>
                <a
                  href="#Kom hier nog een link?"
                  target="_blank"
                  class="btn btn-news font-weight-bold">
                  Bestellen</a>
              </div>
            </div>
          </div>

          <!--Pizza Hawaii -->
          <div class="row d-flex justify-content-around top-buffer">
            <div class="card news-card col-3 buffer-small" style="width: 18rem;">
              <a
                href="#Kom hier nog een link?"
                target="_blank">
                <img src="images/hawaii.png" class="card-img-top" alt="..."/> </a>

              <div class="card-body">
                <h4 class="card-text">
                  Pizza Hawaii
                </h4>

                <a
                  href="#Kom hier nog een link?"
                  target="_blank"
                  class="btn btn-news font-weight-bold">
                  Bestellen</a>
              </div>
            </div>

            <!--Pizza Veggie -->
            <div class="card news-card col-3 buffer-small" style="width: 18rem;">
              <a
                href="#Kom hier nog een link?"
                target="_blank">
                <img src="images/veggie2.png" class="card-img-top" alt="..."/>
              </a>
              <div class="card-body">
                <h4 class="card-text">Pizza Veggie</h4>
                <a
                  href="#Kom hier nog een link?"
                  target="_blank"
                  class="btn btn-news font-weight-bold">
                  Bestellen</a>
              </div>
            </div>

            <!--Pizza Spicy Italiano -->
            <div class="card news-card col-3 buffer-small" style="width: 18rem;">
              <a
                href="#Kom hier nog een link?"
                target="_blank">
                <img src="images/spicy.png" class="card-img-top" alt="..."/> </a>
              <div class="card-body">
                <h4 class="card-text">Pizza Spicy Italiano</h4>
                <a
                  href="#Kom hier nog een link?"
                  target="_blank"
                  class="btn btn-news font-weight-bold"
                  >Bestellen</a>
              </div>
            </div>
          </div>
        </div>

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
          </div>
        </div>
    </footer>
  </body>
</html>
