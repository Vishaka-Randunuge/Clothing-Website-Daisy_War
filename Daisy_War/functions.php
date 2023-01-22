<?php
function pdo_connect_mysql() {

    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'daisywar';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {

    	exit('Failed to connect to database!');
    }
}

function template_header($title) {

$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisy's Wardrobe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<div class="header">

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/daisyLogo-PhotoRoom (1).png" width="180px"></a>
            </div>
            <nav>
            <ul id="MenuItems">
            <li><a href="index.html">Home</a></li>
            <li><a href="Clothes=M.html">Mens' Wear<i class="fa fa-caret-down"></i></a>
            <div class="dropdown-menu">
                <ul>
                    <li><a href="Clothes=M.html">Clothes<i class="fa fa-caret-right"></i></a>
                        <div class="dropdown-menu-1">
                            <ul>
                              <li><a href="Clothes=M-Sh.html">Shirts</a></li>
                              <li><a href="Clothes=M-Tsh.html">T-shirts</a></li>
                              <li><a href="Clothes=M-j.html">Trousers</a></li>
                              <li><a href="Clothes=M-sui.html">Suits</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="Foot=M.html">Footwear<i class="fa fa-caret-right"></i></a>
                        <div class="dropdown-menu-2">
                            <ul>
                              <li><a href="Foot=M-shoe.html">Shoes</a></li>
                              <li><a href="Foot=M-ds.html">Dress Shoes</a></li>
                              <li><a href="Foot=M-boo.html">Boots</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            </li>
            <li><a href="Clothes_W.html">Womens' Wear<i class="fa fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="Clothes_W.html">Clothes<i class="fa fa-caret-right"></i></a>
                            <div class="dropdown-menu-3">
                                <ul>
                                  <li><a href="Clothes_W-Dre.html">Dresses</a></li>
                                  <li><a href="Clothes_W-Top.html">Tops</a></li>
                                  <li><a href="Clothes_W-Trou.html">Trousers</a></li>
                                  <li><a href="Clothes_W-Tsh.html">T-Shirts</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="Foot_W.html">Footwear<i class="fa fa-caret-right"></i></a>
                            <div class="dropdown-menu-4">
                                <ul>
                                  <li><a href="Foot_W-heel.html">Heels</a></li>
                                  <li><a href="Foot_W-shoes.html">Shoes</a></li>
                                  <li><a href="Foot_W-sandal.html">Sandles</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="Clothes-K.html">Kids's Wear<i class="fa fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="Clothes-K.html">Clothes<i class="fa fa-caret-right"></i></a>
                            <div class="dropdown-menu-5">
                                <ul>
                                    <li><a href="Clothes-K-Dre.html">Dresses</a></li>
                                    <li><a href="Clothes-K-Tsh.html">T-shirts</a></li>
                                    <li><a href="Clothes-K-Trou.html">Trousers</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="Foot-K.html">Footwear<i class="fa fa-caret-right"></i></a>
                            <div class="dropdown-menu-6">
                                <ul>
                                  <li><a href="Foot-K-Shoe.html">Shoes</a></li>
                                  <li><a href="Foot-K-sand.html">Sandals</a></li>
                                  <li><a href="Foot-K-Sneak.html">Sneakers</a></li>
                            </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="About.html">About Us</a></li>
                        <li><a href="terms.html">Terms and Conditions</a></li>
                    <div class="link-icons">
                   
                </div>
                </ul>
            </nav>
            <a href="index.php?page=cart">
            <i class="fa fa-shopping-cart"></i>
            <span>$num_items_in_cart</span>
        </a>
            <img src="images/menu.png" class="menu-icon" width="30px" height="30px" onclick="menutoggle()">
        </div>
        
   
</div>
        <main>
EOT;
}

function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisy's Wardrobe</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
        
        <footer>
            
            <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download our for ios & Android mobile phone</p>
                        <div class="app-logo">
                            <img src="images/app-store.png">
                            <img src="images/play-store.png">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/daissylogo.png" width="100px" >
                        <p>We strive to be a local leader in fashion-knit and fashion outerwear by empowering innovation and design to provide total customer satisfaction.</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Beneficial Links</h3>
                        <ul>
                            <li>Our Blog</li>
                            <li>Coupon</li>
                            <li>Return Policy</li>
                            <li>Joint Affliate</li>
        
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow Us On</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                            <li>LinkedIn</li>
        
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2022-Daisy's Wardrobe</p>
            </div>
        </div>
           
        </footer>
    </body>
</html>
EOT;
}
?>



