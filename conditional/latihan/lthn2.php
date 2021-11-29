<?php
$ipk = 2.5;

if ($ipk > 0 && $ipk <=2){
    echo "Grade E, maaf anda harus mengulang";
} else if ($ipk > 2 && $ipk <= 2.5){
    echo "Grade D, maaf anda harus memperbaiki mata kuliah";
} else if ($ipk > 2.5 && $ipk <= 2.6){
    echo "Grade C, mau memperbaiki boleh tidak juga tidak apa-apa ";
} else if ($ipk >2.6 && $ipk <= 3){
    echo "Grade B, mata kuliah anda baik";
} else if ($ipk > 3 && $ipk <= 3.5){
    echo "Grade A, mata kuliah anda super";
} else {
    echo "Sistem error";
}