<?php
include('myconnection.php');

    @include 'myconnection.php';
    if(isset($_POST['signup'])){
        $username = $_POST['email'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $sql = "INSERT INTO restaurant.user(username, password, nama) values('$username','$password','$nama')";
        $result = $connect->query($sql);
        if($result === TRUE){
            header("location:login.php");
        }else{
            header("location:register.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indigo Grill Restaurant</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet"  type = "text/css" href="cobastyle2.css">

</head>

<body>
    <!-- header section starts  -->
    <header class="header">

        <a href="#home" class="logo">
            <img src="images/logo-baruu.jpg" alt="">
        </a>

        <nav class="navbar">
            <a href="index.php#home">Home </a>
            <a href="index.php#about">about</a>
            <a href="index.php#product">product</a>
            <a href="index.php#owner">Owner</a>
            <a href="index.php#contact">Contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-user" id="login-btn" onclick="location.href='login3.php';"></div>
            <div class="fas fa-shopping-cart" id="cart-btn" onclick="location.href='keranjang.php';"></div>
            <div class="fas fa-bars" id="menu-btn"></div> 
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="login">
        <form action="" method="POST">   

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>---- Register ----</h2>

          <div class="box-login">
          <i class="fa fa-user"></i>
             <input type="text" name="nama" placeholder="enter your name" class="box">
          </div>

          <div class="box-login">
          <i class="fas fa-envelope-open-text"></i>
           <input type="email" name="email" placeholder="enter your email" class="box">
          </div>

          <div class="box-login">
           <i class="fas fa-lock"></i>
           <input type="password" name="password" placeholder="enter your password" class="box">
          </div>
    
         
          <div class="remember">
                <input type="checkbox" name="remember" id="remember-me">
                <label for="remember-me">remember me</label>
          </div>

         <!-- <button type="submit" name="login" class="btn-login">Register</button> -->
         <!-- <button type="submit" name="login" class="btn-login"></button> -->


         <div class="reggister">
                <input type="submit" name="signup" value="Register" class="btn" >
         </div>

         </form>
    
         
    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>