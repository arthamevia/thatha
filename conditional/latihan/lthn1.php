<?php
$helm = "ada";
$sim = "ada";
$stnk = "ada";

if($helm == "ada" && $sim == "Tidak" && $stnk == "Tidak" ){
    echo "Kami cek perlengkapan surat stnk & sim nya";
} else if($helm == "ada" && $sim == "Tidak" && $stnk == "ada"){
    echo "Surat lengkap, boleh kami cek sim nya";
} else if($helm == "ada" && $sim == "ada" && $stnk == "ada"){
    echo "Selamat berkendara hati-hati di jalan";
} else {
    echo "Anda kami tilang";
}
?>