<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Home - Sopranos Pizza</title>

  <!--Bootstrap Css and Main Css-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css" />

  <!--Favicon-->
  <link rel="icon" href="img/favicon-194x194.png" type="image/x-icon" />
  <link rel="shortcut icon" href="img/favicon-194x194.png" type="image/x-icon" />
</head>

<body>
  <!--Jumbotron feature-->
  <div class="jumbotron paral" id="jumbo">
    <h1 class="text-center">Sopranos Pizza</h1>
  </div>

  <!--Navigation-->
  <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light fixed-top" data-0="height: 59px;" data-100="height: 30px;">
      <a class="navbar-brand" href="index.php"><img class="img-fluid logo" src="img/favicon-194x194.png" alt="" data-0="width: 80px;" data-100="width: 50px;" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
    <h2 class="text-center bot-buffer font-weight-bold" class="headNews">Wat zoekt u?</h2>
    <div class="row d-flex justify-content-around">
      <div class="card mb-3 col " style="max-width: 18rem;">
        <div class="card-header"></div>
        <div class="card-body">
          <a class="card-title" href="menu.php">Menu bekijken</a>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card mb-3 col " style="max-width: 18rem;">
        <div class="card-header"></div>
        <div class="card-body">
          <a class="card-title" href="order.php">Pizza bestellen</a>
          <p class="card-text"></p>
        </div>
      </div>
      <div class="card mb-3 col" style="max-width: 18rem;">
        <div class="card-header"></div>
        <div class="card-body">
          <a class="card-title" href="foo.php">foo</a>
          <p class="card-text">

          </p>
        </div>
      </div>
    </div>
    <!--End info container-->

    <!-- News container-->
    <div class="container-fluid">
      <h2 class="text-center bot-buffer font-weight-bold" class="headNews">Nieuws</h2>
      <div class="row d-flex justify-content-around">
        <div class="card news-card col-3 buffer-small  " style="width: 18rem;">
          <a href="https://www.destentor.nl/apeldoorn/eeuwenoude-route-op-veluwe-weer-iets-meer-zichtbaar~a0465d1e/" target="_blank"><img src="img/nieuws1.jpg" class="card-img-top news-img" alt="..." /></a>
          <div class="card-body">
            <h4 class="card-text">Eeuwenoude route op Veluwe weer iets meer zichtbaar</h4>
            <a href="https://www.destentor.nl/apeldoorn/eeuwenoude-route-op-veluwe-weer-iets-meer-zichtbaar~a0465d1e/" target="_blank" class="btn btn-news font-weight-bold">Meer..</a>
          </div>
        </div>
        <div class="card news-card col-3 buffer-small" style="width: 18rem;">
          <a href="https://dutchitchannel.nl/618700/yes-delft-the-hague-locatie-geopend.html" target="_blank"><img src="img/YesDelft-430x400.jpg" class="card-img-top news-img" alt="..." /></a>
          <div class="card-body">
            <h4 class="card-text">YES!Delft The Hague locatie geopend</h4>
            <a href="https://dutchitchannel.nl/618700/yes-delft-the-hague-locatie-geopend.html" target="_blank" class="btn btn-news font-weight-bold">Meer..</a>
          </div>
        </div>
        <div class="card news-card col-3 buffer-small" style="width: 18rem;">
          <a href="https://adodenhaag.nl/nl/nieuws/laatste-nieuws/overig/7642-ado-den-haag-zoekt-stewards" target="_blank">
            <img src="img/nieuws3.jpg" class="card-img-top news-img" alt="..." /></a>
          <div class="card-body">
            <h4 class="card-text">ADO DEN HAAG ZOEKT STEWARDS!</h4>
            <a href="https://adodenhaag.nl/nl/nieuws/laatste-nieuws/overig/7642-ado-den-haag-zoekt-stewards" target="_blank" class="btn btn-news font-weight-bold">Meer..</a>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-around top-buffer">
        <div class="card news-card col-3 buffer-small" style="width: 18rem;">
          <a href="https://indebuurt.nl/denhaag/nieuws/nieuw-in/haagse-nerds-opgelet-deze-grote-gamestore-opent-binnenkort-in-het-centrum~84652/" target="_blank"><img src="img/nieuws4.jpg" class="card-img-top" alt="..." /></a>
          <div class="card-body">
            <h4 class="card-text">
              Haagse nerds opgelet! Deze grote gamestore opent binnenkort in het centrum
            </h4>
            <a href="https://indebuurt.nl/denhaag/nieuws/nieuw-in/haagse-nerds-opgelet-deze-grote-gamestore-opent-binnenkort-in-het-centrum~84652/" target="_blank" class="btn btn-news font-weight-bold">Meer..</a>
          </div>
        </div>
        <div class="card news-card col-3 buffer-small" style="width: 18rem;">
          <a href="https://www.1limburg.nl/weinig-animo-docenten-um-voor-staking-den-haag" target="_blank"><img src="img/nieuws5.jpg" class="card-img-top" alt="..." /></a>
          <div class="card-body">
            <h4 class="card-text">Weinig animo docenten UM voor staking in Den Haag</h4>
            <a href="https://www.1limburg.nl/weinig-animo-docenten-um-voor-staking-den-haag" target="_blank" class="btn btn-news font-weight-bold">Meer..</a>
          </div>
        </div>
        <div class="card news-card col-3 buffer-small" style="width: 18rem;">
          <a href="https://www.denhaag.nl/nl/bestuur-en-organisatie/verkiezingen.htm" target="_blank">
            <img src="img/Lokale-politiek0.jpg" class="card-img-top" alt="..." /></a>
          <div class="card-body">
            <h4 class="card-text">Verkiezingen</h4>
            <a href="https://www.denhaag.nl/nl/bestuur-en-organisatie/verkiezingen.htm" target="_blank" class="btn btn-news font-weight-bold">Meer..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <div class="container-fluid" style="width: 100%;">
    <footer class="top-buffer  ">
      <div class="row">
        <div class="col-md-4 footer-name">
          <span class="copyright">Copyright &copy; Sopranos Pizza</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/GemeenteDenHaag" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/gemeenteDH/" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/gemeentedenhaag/?hl=nl" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>

</body>

</html>