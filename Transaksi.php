<?php
session_start();
    if(!isset($_SESSION['status_login'])){
        header("Location: login.php");
    }
?>
<html>
    <head>
    <title>Indigo Grill Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light d-flex" style="justify-content:space-around;background-color:#000;">

 
        <a href="home.html" class="logo">
            <img  src="images/logo-baruu.jpg " height="100" width="350">
        </a>

        <h1 style="color: #fff">PEMESANAN</h1>

</nav>
        <div style="margin-top:50px;" class="container">
            <div class="middle">
            <form method="POST" action="">
                <div class="mb-3 form-check">
                    <label for="exampleInputEmail1" class="form-label">Nama Pembeli</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                <label for="exampleInputEmail1" class="form-label">Pilih Paket</label>
                    <select class="form-select" name="paket" aria-label="Default select example">
                        <option value="Paket 1">Paket 1</option>
                        <option value="Paket 2">Paket 2</option>
                        <option value="Paket 3">Paket 3</option>
                        <option value="Paket 4">Paket 4</option>
                        <option value="Paket 5">Paket 5</option>
                        <option value="Paket 6">Paket 6</option>
                        <option value="Paket 7">Paket 7</option>
                        <option value="Paket 8">Paket 8</option>
                        <option value="Paket 9">Paket 9</option>
                        <option value="Paket 10">Paket 10</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                    <label for="exampleInputEmail1" class="form-label">Jumlah Paket</label>
                    <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                <label for="exampleInputEmail1" class="form-label">Metode Pemesanan</label>
                    <select class="form-select" name="metode" aria-label="Default select example">
                        <option value="1">Gojek</option>
                        <option value="2">SHOPE</option>
                        <option value="3">Take Away</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                    <select class="form-select"  aria-label="Default select example">
                        <option value="1">tunai</option>
                        <option value="2">debit 2</option>
                    </select>
                </div>
    
                <button type="submit" name="HITUNG" class="btn btn-primary">Hitung</button>
            </form>

            </div>
            <?php
           
                if(isset($_POST['HITUNG'])){
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $paket = $_POST['paket'];
                    $jumlah = $_POST['jumlah'];
                    $metode = $_POST['metode'];
                
                    function logout(){
                        session_start();
                        session_unset();
                        session_destroy();
                    }
                        if($paket == "Paket 1"){
                            $harga = 65000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();

                            }
                        }else if($paket == "Paket 2"){
                            $harga = 80000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 3"){
                            $harga = 86500;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 4"){
                            $harga = 48000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 5"){
                            $harga = 26000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 6"){
                            $harga = 35000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 7"){
                            $harga = 30000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 8"){
                            $harga = 23000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 9"){
                            $harga = 18000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }else if($paket == "Paket 10"){
                            $harga = 20000;
                            $total_jumlah = $harga * $jumlah;
                            if($metode == 1){
                                $total = $total_jumlah + 5000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 2){
                                $total = $total_jumlah + 10000;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }elseif($metode == 3){
                                $total = $total_jumlah + 0;
                                echo "<script>
                                        alert('Total pembayaran Anda $total, Anda juga telah logout');
                                        window.location = 'home.php';
                                        </script>"; 
                                        logout();
                            }
                        }
                }
                
            ?>

        </div>
    </body>
</html>