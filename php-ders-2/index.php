<?php
//MySQL ile bağlantının nasıl kurulduğunu göreceğiz:
//mysqli_connect() fonksiyonunu kullanıyoruz.
$baglan = mysqli_connect("localhost","root","","hepsiburada");
if($baglan){
    echo "Veritabanı bağlantısı gerçekleşti";
}else{
    echo die("Veritabanına bağlantı sağlanamadı");
}

?>