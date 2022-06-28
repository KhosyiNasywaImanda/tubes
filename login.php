
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
            <div class="fas fa-user" id="login-btn" onclick="location.href='login.php';"></div>
            <div class="fas fa-shopping-cart" id="cart-btn" onclick="location.href='keranjang.php';"></div>
            <div class="fas fa-bars" id="menu-btn"></div> 
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <!-- kotak form login -->
        <div class="login">
        <form action="" method="POST">
          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>---- Login Form ----</h2>
          <br><br>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="email" placeholder="Email">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="enter your password" class="box">
        </div>

        <div class="box-login">
            <i class="fa fa-user"></i>
            <input type="text" name="level" placeholder="Login Sebagai">
        </div>

          <div class="remember">
                    <input type="checkbox" name="remember" id="remember-me">
                    <label for="remember-me">remember me</label>
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          <!-- <input type="submit" name="login" value="login" class="btn"> -->
       
          </form>
          <?php

include 'myconnection.php';

if( isset($_POST["login" ])) {
    session_start();
    $username = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM user WHERE username ='$username' AND password = '$password'");

    //cek username
        if( mysqli_num_rows($result) > 0  ) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['password'] = $password;
    //cek level
         if($row['level'] == "admin"){
             echo "<script>
                alert('selamat datang admin');
                window.location = 'homeCRUD.php';
                </script>"; 
         }else{
            $_SESSION['status_login'] = true;
             echo "<script>
                alert('selamat datang pengguna');
                window.location = 'home.php';
                </script>"; 
         }
        // echo "<script>
        //  alert('username atau password salah');
        //  window.location = 'login.php';
        // </script>"; 
        }
        
    }
?>
          
          <div class="bottom">
             <a href="">don't have an account?</a></p>
             <a href="register.php">Register</a></p>
          </div>
      </div>


    <!-- custom js file link  -->
    <script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
    <script src="js/script.js"></script>

</body>

</html>