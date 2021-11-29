<?php

$status   = "Sekretaris";
$nama     = "Ratna";
$keluarga = 5 ;
$pajakk   = 0.025;
$tunjangann = 0.1;
$transportt = 50000;



echo "Nama Pekerja : " .$nama. "<br>";
echo "Status : " .$status. "<br>";
switch ($nama){
    case "Budi":
if ($status == "Manager"){
    $gaji = 4500000;
    echo "Gaji Pokok : ".$gaji;
    echo "<hr>";
$bpjs = $keluarga * 150000;
echo "BPJS : ".$bpjs. "<br>";
$Pajak = $pajakk * 4500000;
echo "Pajak : ".$Pajak. "<br>";
echo "<hr>";
$total = $bpjs + $Pajak;
echo "Total Potongan : ".$total."<br>";
echo "<hr>";

$lembur = 45 * 50000;
echo "Lembur : ".$lembur. "<br>";
$tunjangan = $tunjangann * 4500000;
echo "Tunjangan : ".$tunjangan. "<br>";
$transport = $transportt * 24;
echo "Transport : ".$transport. "<br>";
echo "<hr>";
$bonus = $tunjangan + $lembur + $transport;
echo "Bonus : ".$bonus. "<br>";
echo "<hr>";

$gb = ($gaji - $total) + $bonus;
echo "Gaji Bersih : ".$gb. "<br>";
}

case "Ratna": 
 if ($status == "Sekretaris"){
    
    $gaji = 3500000;
    echo "Gaji Pokok : ". $gaji;
    echo "<hr>";
$bpjs = 1 * 150000;
echo "BPJS : ".$bpjs. "<br>";
$Pajak = $pajakk * 3500000;
echo "Pajak : ".$Pajak. "<br>";
echo "<hr>";
$total = $bpjs + $Pajak;
echo "Total Potongan : ".$total."<br>";
echo "<hr>";

$lembur = 35 * 45000;
echo "Lembur : ".$lembur. "<br>";
$tunjangan = $tunjangann * 3500000;
echo "Tunjangan : ".$tunjangan. "<br>";
$transport = 35000 * 24;
echo "Transport : ".$transport. "<br>";
echo "<hr>";
$bonus = $tunjangan + $lembur + $transport;
echo "Bonus : ".$bonus. "<br>";
echo "<hr>";

$gb = ($gaji - $total) + $bonus;
echo "Gaji Bersih : ".$gb. "<br>";
}
break;
}
?>
