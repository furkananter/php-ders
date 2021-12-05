<?php 
function kullanilabilirlik($pus,$pd){
    $kul = ($pus-$pd)/$pus;
    return $kul;
}

function performans($scz,$um,$pus,$pd){
    $perf = (($scz*$um)/($pus-$pd));
    return $perf;
}

function kalite($sum,$tum){
    $kal = $sum/$tum;
    return $kal;
}
function oee($kul, $perf, $kal) {
    $oee=($kul*$perf*$kal)/100;
    return $oee;
}

$baglanti = 


?>