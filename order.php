<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Navbar thanh điều hướng -->
    <div class="Main">
       <div class="Header">
            <div class ="NavBar">
                <div class="Logo">
                <a href="#" title="Logo">
                <img src="assets/css/img/logo.png" class="img-logo"></a> 
                </div>
                <ul  class="NavItems">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="categories.php">Categories</a>
                </li>
                <li>
                    <a href="foods.php">Foods</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            </div>
            
        </div>
        
    </div>
    <div class="order-foods">
    <div class="food-search">
        <div class="food-menu-img">
            <img src="assets/css/img/bg.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
        </div>
        <div class="container-order">
        
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
            <form action="#" class="order">
                <fieldset class="field">
                    <legend>Selected Food</legend>

                    <!-- <div class="food-menu-img">
                        <img src="assets/css/img/bg.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div> -->
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset class="field">
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. phamquangduong542001" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 09496238xx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. phamquangduong542001@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </div>
    </div>
        <!-- order -->


        
     
<!-- footer -->
<div class="footer">
    <div class="container-footer">
        <a href="#"><img src="assets/css/img/facebook.png" alt=""></a>
        <a href="#"><img src="assets/css/img/instagram.png" alt=""></a>
        <a href="#"><img src="assets/css/img/twitter.png" alt=""></a>
    </div>
    <div class="text-lazy" >
        All rights reserved. Designed By PQD
    </div>
</div>
</body>
</html>