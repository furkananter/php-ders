<?php
echo "merhaba dünya";
//echo print'in gördüğü görevi görmekle mükelleftir.
/*
Multi Line comment satırını
temsil eder.
*/
/* ------------ */
$adi = "Furkan";
$soyadi = "Anter";
echo $adi.$soyadi;
echo "Furkan <br> Anter";
//php kodları içerisine html kodları yazabiliyoruz.
//html içerisine de php kodları yazabiliyoruz.
/* ------------ */
$furkan;
$Furkan;
$furKan; //bu üç değişken de farklı şeylerdir. İçerisine tanımladığımız değere göre değişkenin tipi belirlenir.
/* ------------ */
define("BOLUM", "YBS");
echo BOLUM;
$yas = 33;
$oran = 3.15;
$adi = "Can";
$durum = false;
$arabalar = array("BMW","Volvo","Mercedes");
/* -----Fonksiyonlar------- */ 
//tanımlanan değişken için bir fonksiyon yaratmanın php'cesi

$bolum = "YBS";
function yarat($bolum){
    echo $bolum;
}
yarat($bolum);
/* --------Koşullar------ */
$a = "1234";
if(strlen($a)<5){
    echo "Değişkendeki karakter sayısı 5'ten küçüktür.";
}else{
    echo "Değişkendeki karakter sayısı 5'ten büyüktür.";
}
/*----------Substr ve Strstr Kavramları-------- */
//substr karakterleri belirli bir yerden bölmek için yerden
//strstr() içerisinde belirtilen kelimenin geçip geçmediğini belirliyor.
$metin = "substr karakterleri belirli bir";
if(strstr($metin , "bir")){
    echo "bir kelimesi geçmektedir.";
}
/* Explode Kavramı */

$eposta = "anterfurkan@gmail.com";
$parcala  = explode("@", $eposta);
echo $parcala[0];
/* ------For Döngüsü------ */
$dizi = array("ybs","isl","eko","maliye");
for ($i = 0; $i<count($dizi); $i++){
    echo $dizi[$i]."</br>";
}
//---Diğer Bir Kullanım---
foreach($dizi as $i){
    echo $i."</br>";
}
/* ----------------*/
/* ----While Kullanımı */
while($sayi<= 10){
    echo $sayi."</br>";
    $sayi++;
}
//Dğer bir kullanım:
do{
    echo $sayi."</br>";
    $sayi++;
}
while{
    $sayi<1;
}
/* -------Devam---------*/
$sayi = 1;
do{
    echo $sayi."</br>";
    $sayi++;
}
while($sayi<10);
/* ----------------*/
/* Require ve Include (Dosya Çağırma Fonksiyonları) Kullanımı: */
/* Require: dosyanın muhakkak çağrılan yerde
olması gerekmektedir.
*/
require("kontrol.php");
/* Include: dosya yerinde olmasa bile,
program çalışmaya devam eder. */
include("kontrol.php");
/*--------------- */
/* Require Once ve Include Once Fonksiyonu */
//ikisi de bir kere çalıştırılması için tasarlanmıştır.
require_once("kontrol.php");
include_once("kontrol.php");
/* -------------- */
?>