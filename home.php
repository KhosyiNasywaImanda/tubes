
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indigo Grill Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"  type = "text/css" href="cobastyle2.css">
</head>

<body>
    <header class="header">

        <a href="home.html" class="logo">
            <img  src="images/logo-baruu.jpg " height="300" width="350">
        </a>

        <nav class="navbar">
            <a href="#home">Home </a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#owner">Owner</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-user" id="login-btn" onclick="location.href='login.php';"></div>
            <div class="fas fa-shopping-cart" id="cart-btn" onclick="location.href='menu.php';"></div>
            <div class="fas fa-bars" id="menu-btn"></div> 
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>
    <section class="home fullscreen" id="home">
    <div class="content" style img src="images/background-home.jpg" no repeat> 
            <h1>Selamat Datang Di Restoran Kami!</h1>
            <h2>Good Food Good Mood!<h2>
            <p> RASA BINTANG LIMA HARGA KAKI LIMA</p>
            <a href="transaksi.php" style="padding:15px;background-color:#f0a906;border-radius:10px;display:inline-block;">Order Now</a>
            
    </div>
    </section>
    <!-- home section ends -->

    <!-- about section starts  -->
    <section class="about fullscreen" id="about">

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/background-about.jpg" width="300px" height="500px" alt="">
            </div>

            <div class="content">
                <h3>About Indigo Grill</h3>
                <p>Indigo grill berdiri dan dijadikan peluang usaha yang bagus 
                    dikarenakan stigma mahal yang sudah sangat melekat pada masakan eropa seperti steak.
                    Konon steak hanya bisa dinikmati oleh kalangan menengah ke atas.
                </p>
                <p>dari sinilah akhirnya timbul gagasan untuk membuat steak dengan harga yang terjangkau
                     oleh kantong mahasiswa dan masyarakat menengah kebawah. Akhirnya pada 25 Juni tahun 2022 
                     berdirilah outlet yang bernama indigo grill di 089616693464 jalan Soekarno hatta, Malang.</p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>

    </section>
    <!-- about section ends -->

    <!-- add and delete products -->
   

    <!-- product section starts  -->
    <section class="menu" id="product">

        <h1 class="heading"> our <span>MENU</span></h1>
            <div class="box-container">
            <?php
                include('menu.php');
            ?>
            </div>
    </section> 
    <!-- product section ends -->

    <!-- review section starts  -->
    <section class="review fullscreen" id="owner">

        <h1 class="heading">owner<span> shop</span></h1>

        <div class="box-container">

            <div class="box">
                 <!-- <img src="images/quote-img.png" alt="" class="quote"> -->
                <h3>Jati Wahyu Kusuma</h3>
                <br><br>
                <img src="images/foto-jati.jpg" class="user" alt="">
                <br><br>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <!-- <img src="images/quote-img.png" alt="" class="quote"> -->
                <h3>Khosyi Nasywa Imanda</h3>
                <br><br>
                <img src="images/foto-khosyi.jpg" class="user" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <!-- <img src="images/quote-img.png" alt="" class="quote"> -->
                <h3>Fadly Ulya Satriadi</h3>
                <br><br>
                <img src="images/foto-fadly.jpg" class="user" alt="">
                <br><br>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>  
        </div>

    </section>
    <!-- review section ends -->

    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.504392958615!2d112.61347971397987!3d-7.946713594276057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1656263013023!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="">
                <h3>Direct Contact</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>
    <!-- contact section ends -->

    <!-- footer section starts  -->
    <section class="footer">
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>

        <div class="links">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#product">Product</a>
            <a href="#owner">Owner</a>
            <a href="#contact">contact</a>
        </div>
        <div class="credit">created by <span>Indigo_Grill</span> | all rights reserved</div>
    </section>
    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>