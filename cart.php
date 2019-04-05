<?php
session_start();
$product_ids = array();
//session_destroy(); //destroys all data registered to a session

//check if add to cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
  if(isset($_SESSION['shopping_cart'])){
    //keep track of how many products are in the shopping cart
    $count = count($_SESSION['shopping_cart']);

    //create sequential array for matching array keys to product ids
    $product_ids = array_column($_SESSION['shopping_cart'], 'id');

    //pre_r($product_ids);

    if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
      $_SESSION['shopping_cart'][$count] = array(
        'id' => filter_input(INPUT_GET, 'id'),
        'name' => filter_input(INPUT_POST, 'name'),
        'price' => filter_input(INPUT_POST, 'price'),
        'quantity' => filter_input(INPUT_POST, 'quantity')
      );
    } else{ //product already exists, increase quantity
      //match array key to id of the product being added to the cart
      for($i = 0; $i < count($product_ids); $i++){
        if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
          //add item quantity to existing product in the array
          $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
        }
      }
    }

  } else{//if shopping cart doesn't exist, create first product with array 0
    //create array using submitted form data, start from key 0 and fill in with values
    $_SESSION["shopping_cart"] = array();
    $_SESSION['shopping_cart'][0] = array(
      'id' => filter_input(INPUT_GET, 'id'),
      'name' => filter_input(INPUT_POST, 'name'),
      'price' => filter_input(INPUT_POST, 'price'),
      'quantity' => filter_input(INPUT_POST, 'quantity')
    );
  }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
  //loop through all the products in the shopping cart until it matches with GET id variable
  foreach($_SESSION['shopping_cart'] as $key => $product){
    if($product['id'] == filter_input(INPUT_GET, 'id')){
      //remove product from the shopping cart when it matches with the GET id
      unset($_SESSION['shopping_cart'][$key]);
    }
  }
  //reset session array keys so they match with $product_ids numeric array
  $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION); //shows $_SESSION array

/*function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bestellen - Sopranos Pizza</title>
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
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
  <!--Jumbotron feature-->
  <div class="jumbotron paral" id="jumbo">
        <h1 class="text-center">Soprano's Pizza</h1>
      </div>

      <!--Navigation-->
      <div class="container-fluid">
        <nav
          class="navbar navbar-expand navbar-light fixed-top"
          data-0="height: 59px;"
          data-100="height: 30px;">
        
          <div class="navbar-brand logo" href="index.php"></div>

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
              <li class="nav-item active">
                <a class="nav-link" onclick="location.reload()">Bestellen</a>
              </li>
          </div>
        </nav>
      </div>
<div class="container-fluid">
  <div class="container">
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sopranos";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $query = "SELECT * FROM menu";
  $result = $conn->query($query);

  if ($result):
    if(mysqli_num_rows($result)>0):
      while($product = mysqli_fetch_assoc($result)):
        //print_r($product);
      ?>
      <div class="col-sm-4 col-md-3" style="float: left;">
        <form action="cart.php?action=add&id=<?php echo $product['Itemnr']?>" method="POST">
          <div class="products">
            <img class="img-responsive" src="img/pizza-hut-cheese-lovers.jpg" style="width: 100%;">
            <h4 class="text-info"><?php echo $product['Item']; ?></h4>
            <h4><?php echo "€".($product['Prijs'] / 100) ?></h4>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="name" value="<?php echo $product['Item']; ?>">
            <input type="hidden" name="price" value="<?php echo $product['Prijs']; ?>">
            <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-info" value="Toevoegen">
          </div>
        </form>
      </div>
      <?php
      endwhile;
    endif;
  endif;
  ?>
    <div style="clear: both;"></div>
    <br>
    <div class="table-responsive">
      <table class="table">
        <tr><th colspan="5"><h3>Winkelwagen</h3></th></tr>
        <tr>
          <th width="65%">Product Name</th>
          <th width="0%"></th>
          <th width="15%">Quantity</th>
          <th width="15%">Price</th>
          <th width="5%">Action</th>
        </tr>
        <?php
        if(!empty($_SESSION['shopping_cart'])):
          $total = $_SESSION['shopping_cart'][0]['price'];
          foreach($_SESSION['shopping_cart'] as $key => $product):
            //$total = $product['price'] + ((($product['quantity'] - 1) * 0.5) * $product['price']);
        ?>
        <tr>
          <td><?php echo $product['name']; ?></td>
          <td></td>
          <td><?php echo $product['quantity']; ?></td>
          <td><?php echo "€".($product['price'] / 100); ?></td>
          <td>
            <a href="cart.php?action=delete&id=<?php echo $product['id']; ?>">
              <div class="btn-danger">Remove</div>
            </a>
          </td>
        </tr>
        <?php 
        $total = $total + ($product['quantity'] * $product['price']);
          endforeach;
          $total = $total / 2;
        ?>
        <tr>
          <td colspan="3" align="right">Total</td>
          <td align="right"><?php echo "€"; echo $total / 100; ?></td>
          <td></td>
        </tr>
        <tr></tr>
        <tr><th colspan="5"><h3>Bestelling</h3></th></tr>
        <?php
        endif;
        ?>
      </table>
    </div>
      <div class="col-sm-4 col-md">
        <form action="insert.php" method="post">
            <a style="display:none;">Totale prijs in eurocent: </a><input type="text" name="prijs" style="display:none;" value="<?php echo $total; ?>" readonly><br>
            Postcode en huisnummer: <input type="text" name="postcode" placeholder="1234AB 123a" required><br>
            Naam: <input type="text" name="naam" required><br>
            Email: <input type="email" name="email" required><br>
            Tel: <input type="text" name="tel" required><br>
            Bezorginstructies: <input type="text" name="bezorginstructies"><br>
            <input type="submit" value="verstuur"><br>
        </form>
      </div>
  </div>
  <!--Footer-->
  <div class="container-fluid" style="width: 100%;">
    <footer class="top-buffer">
          <div class="row">
            <div class="col-md-4 footer-name">
              <span class="copyright">Copyright &copy; Sopranos Pizza</span>
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