<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<style>
    .hasil {
        width: 500px;
        text-align: left;
    }
    td {
        padding: 3px;
    }
    input[type="text"] {
        width: 320px;
    }
    p {
        text-align: right;
    }
    h2 {
        text-align: center;
    }
    
.left {
    text-align: left;
}
</style>
<div class="container">
<br>
    <center>
        <div class="card">
        <div class="card-header"><h5>Penggajian Karyawan</h5></div>
        <h3 class="p-4">PT. Selalu Makmur Jaya</h3>
        <form action="" method="post">
        <table class= "table table-info table-striped">
            <tr>
                <td class="p-3 mb-2 bg-light text-dark" width="160">Nama Bendahara</td><td>:</td>
                <td><input type="text" class="form-control" name="nama-ben"></td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Nama Pekerja</td><td>:</td>
                <td><input type="text" class="form-control" name="nama-pek"></td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Jenis Kelamin</td><td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Tanggal Gaji</td><td>:</td>
                <td><input type="date" class="form-control" name="tgl"></td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Jabatan</td><td>:</td>
                <td>
                    <select class="form-select" name="jabatan">
                        <option value="Direktur">Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="OB">OB</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Pendidikan Terakhir</td><td>:</td>
                <td>
                    <select class="form-select" name="pendidikan">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Lembur</td><td>:</td>
                <td><input type="text" class="form-control" name="lembur"></td><td>Hari/Rp.20.000</td>
            </tr>
            <tr>
                <td class="p-3 mb-2 bg-light text-dark">Potongan</td><td>:</td>
                <td><input type="number" class="form-control" name="potongan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" class="form-control btn btn-primary" name="submit" value="KIRIM"></td>
            </tr>
        </table>
        </form><br><br><br>
        </div><br><br><br>


        <?php
        if (isset($_POST['submit'])) {
            $namaBen = $_POST['nama-ben'];
            $namaPek = $_POST['nama-pek'];
            $jk = $_POST['jk'];
            $tgl = $_POST['tgl'];
            $jabatan = $_POST['jabatan'];
            $pendidikan = $_POST['pendidikan'];
            $lembur = $_POST['lembur'];
            $potongan= $_POST['potongan'];
            $hari = 20000;

            $vakasi = $lembur * $hari;


            if ($jabatan == "Direktur") {
                $gaji = 10000000;
                if ($pendidikan == "SD") {
                $tunjangan = 200000;
                $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMP") {
                    $tunjangan = 500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMA") {
                    $tunjangan = 1000000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "S1") {
                    $tunjangan = 1500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                }
                else if ($pendidikan == "S2") {
                  $tunjangan = 2000000;
                  $total = ($gaji + $tunjangan + $vakasi) - $potongan;
              }
            }
            else if ($jabatan == "Manager") {
                $gaji = 7500000;
                if ($pendidikan == "SD") {
                $tunjangan = 200000;
                $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMP") {
                    $tunjangan = 500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMA") {
                    $tunjangan = 1000000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "S1") {
                    $tunjangan = 1500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                }
                else if ($pendidikan == "S2") {
                  $tunjangan = 2000000;
                  $total = ($gaji + $tunjangan + $vakasi) - $potongan;
              }
            }
            else if ($jabatan == "Karyawan") {
                $gaji = 5000000;
                if ($pendidikan == "SD") {
                $tunjangan = 200000;
                $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMP") {
                    $tunjangan = 500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMA") {
                    $tunjangan = 1000000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "S1") {
                    $tunjangan = 1500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                }
                else if ($pendidikan == "S2") {
                  $tunjangan = 2000000;
                  $total = ($gaji + $tunjangan + $vakasi) - $potongan;
              }
            }
            else if ($jabatan == "OB") {
                $gaji = 2500000;
                if ($pendidikan == "SD") {
                $tunjangan = 200000;
                $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMP") {
                    $tunjangan = 500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "SMA") {
                    $tunjangan = 1000000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                } else if ($pendidikan == "S1") {
                    $tunjangan = 1500000;
                    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
                }
                else if ($pendidikan == "S2") {
                  $tunjangan = 2000000;
                  $total = ($gaji + $tunjangan + $vakasi) - $potongan;
              }
            }

            ?>

            <div class="card">
                <div class="card-header"><h4>Struk Gaji Karyawan</h4></div>
                <div class="card-body text-left">
                    <div class="container">
                <p>Tanggal : <b><?php echo $tgl; ?></b></p>

                <div class="left">
<?php
            echo "<b><i>Gaji Pokok</i></b>";
            echo "<table>";
            echo "<tr>";
            echo "<td width=200>Nama Karyawan</td><td>:</td><td>$namaPek</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Jenis Kelamin</td><td>:</td><td>$jk</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Pendidikan Terakhir</td><td>:</td><td>$pendidikan</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Jabatan</td><td>:</td><td>$jabatan</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Gaji</td><td>:</td><td>Rp. $gaji</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>";

            echo "<b><i>Tunjangan</i></b>";
            echo "<table>";
            echo "<tr>";
            echo "<td width=200>Tunjangan Pendidikan</td><td>:</td><td>Rp. $tunjangan</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Vakasi Lembur</td><td>:</td><td>Rp. $vakasi</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>";

            echo "<b><i>Potongan</i></b>";
            echo "<table>";
            echo "<tr>";
            echo "<td width=200>Potongan</td><td>:</td><td>Rp. $potongan</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><b></b><i>Total Gaji</i></b></td><td>:</td><td><b><i>Rp. $total</i></td>";
            echo "</tr>";
            echo "</table>";
            ?>
            </div>
<p>Bendahara : <?php echo $namaBen; ?></p>
        <?php 
        }
        ?>
        </div>
        </div>
</div><br><br><br>

        
    </center>
    </div>
</body>
</html>