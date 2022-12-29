<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASA KAFE</title>
    <link rel="stylesheet" href="style.css">
    <meta name="keywords" content="html,css,java,javascript">
    <link rel="icon" href="görsel/Logo/WI.png">
</head>

<body>
    <header class="container">
        <nav>
            <div class="logo">
                <a href="index.php">ASA</a>
            </div>
            <div class="menu">
                <ul>
                
                            <li><a href="soguk.php">Soğuk İçecekler</a></li>
                            <li><a href="sicak.php">Sıcak İçecekler</a></li>
                        <li><a href="anayemek.php">Yemekler</a></li>
                            <li><a href="giris.html">Admin Girişi</a></li>
                            <li><a href="Hakkımda.html">Hakkında</a></li>
                </ul>
                <a href="https://www.google.com.tr/" target="_blank" class="menu-button">Daha Fazlası</a>
            </div>
        </nav>
    </header>
    <section class="container içerik">
        <h1>Soğuk İçecekler</h1>
    </section>
<center >
<font color="aliceblue" size="5">
<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$conn = new mysqli($servername, $username, $password, $dbname);
$new = mysqli_set_charset($conn, "utf8");
$bul = "SELECT * FROM ilanlar";
$kayit = $conn->query($bul);
if($kayit->num_rows>0){
    while($satir =$kayit->fetch_assoc()){
        echo $satir["ilan_baslik"]." ".$satir["ilan_fiyat"]."<br>";  }
}
        $conn->close();
 ?>
</font>
</center>


    <br><br><br><br>
    <footer class="footer">
        <div class="a container">
            <div class="row">
                <div class="footer-col">
                    <h4>Bilgiler</h4>
                    <ul>
                        <li><a href="https://www.google.com/maps/place/T%C3%BCrkiye/@38.7412481,26.1844276,5z/data=!3m1!4b1!4m5!3m4!1s0x14b0155c964f2671:0x40d9dbd42a625f2a!8m2!3d38.963745!4d35.243322"
                                target="_blank">TÜRKİYE</a></li>
                        <li>
                            <a href="#"> <small>© 2021-2022</small></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>MENÜLER</h4>
                    <ul>
                    
                            <li><a href="soguk.php">Soğuk İçecekler</a></li>
                            <li><a href="sicak.php">Sıcak İçecekler</a></li>
                        <li><a href="anayemek.php">Yemekler</a></li>
                            <li><a href="giris.html">Admin Girişi</a></li>
                            <li><a href="Hakkımda.html">Hakkında</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>İLETİŞİM ADRESLERİ</h4>
                    <ul>
                        <li><a href="https://www.instagram.com/samettalnm/" target="_blank">Instagram</a></li>
                        <li><a href="https://mail.google.com/mail/u/0/#inbox " target="_blank">E-Mail</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>ASA KAFE</h4>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>

</body>

</html>
