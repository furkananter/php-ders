<?php
// kullanıcıdan alacağımız verileri buradan baglanti.php tarafına ve oradan da database'ye yollayacağız.
require("baglanti.php");
if($baglan){
    if($_POST){
        if($_POST["adi"]){
            $adi = $_POST["adi"];
            echo $adi;
        }else{
            die("İsim Yazdırılamadı!");
        }
        echo " ";
        if($_POST["soyadi"]){
            $soyadi = $_POST["soyadi"];
            echo $soyadi;
        }else{
            die("Soyisim Yazdırılamadı!");
        }
        echo " ";
        if($_POST["hesap_no"]){
            $hesap_no = $_POST["hesap_no"];
            echo $hesap_no;
        }else{
            die("Hesap No Yazdırılamadı!");
        }
        echo " ";
        $sorgu = mysqli_query($baglan, "INSERT INTO musteriler (adi,soyadi,hesap_no) VALUES('".$adi."','".$soyadi."','".$hesap_no."')");

        if($sorgu === TRUE){
            echo "Kayıt Başarıyla Yapıldı. ☺️";
        }else{
            echo "Hata".$baglan -> error;
        }
    }
}else{
    die("Bağlantı Yapılamadı!");
}


?>