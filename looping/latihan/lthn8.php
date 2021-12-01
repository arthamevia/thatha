<?php

$siswa = [
    ['nama' => 'Yuli', 'jk' => 'Perempuan', 'umur' => 17],
    ['nama' => 'Suci', 'jk' => 'Perempuan', 'umur' => 17],
    ['nama' => 'Sumi', 'jk' => 'Perempuan', 'umur' => 16],
    ['nama' => 'Wildan', 'jk' => 'Laki-laki', 'umur' => 16],
    ['nama' => 'Rohesa', 'jk' => 'Laki-laki', 'umur' => 17],
];
foreach ($siswa as $value) {
    echo "Nama : " . $value['nama'] . "<br>";
    echo "Jenis Kelamin : " . $value['jk'] . "<br>";
    echo "Umur : " . $value['umur'] . "<br>";
    echo "<hr>";
}