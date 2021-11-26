<?php
$gk = 4500000;
$pajak = 112500;
$bpjs = 200000;
$infak = 50000;
$ut = 10000;
$h = 24;

$bonus = $ut * $h;
$total = $gk - $infak - $pajak - $bpjs + $bonus;

echo "Gaji Kotor : Rp. $gk";
echo "<br>";
echo "Pajak : Rp. $pajak";
echo "<br>";
echo "BPJS : Rp. $bpjs";
echo "<br>";
echo "Infak : Rp. $infak";
echo "<br>";
echo "Bonus : Rp. $bonus";
echo "<br>";
echo "Sisa Gaji : Rp. $total";
echo "<br>";

?>