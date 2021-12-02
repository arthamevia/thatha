<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pengulangan</title>

  </head>
  <body>
  <div class="card container" style="width: 35rem;">
  <div class="card-body container">

    <h2 align="center">Form Pengulangan</h2>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td></td>
                <td></td>
                <td>1. Deret Bilangan Ganjil</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2. Segitiga Sama Kaki Terbalik</td>
            </tr><tr>
                <td></td>
                <td></td>
                <td>3. Deret Bilangan Kelipatan 3</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="number" name="pilih"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="masukkan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST ['kirim'])){
        $pilih = $_POST ['pilih'];
        $angka = $_POST ['masukkan'];

        if ($pilih == 1){
            echo "<center>";
            echo "<h3>Deret Bilangan Ganjil</h3>";
            for ($x = 1; $x <= $angka; $x+=2){
                echo "$x ";
            }
            echo "</center>";
        }elseif($pilih == 2){
            echo "<center>";
            echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
            for ($x = $angka; $x >= 1; $x--){
                for ($v = $angka; $v > $x; $v--){
                    echo " ";
                }for ($c = 1; $c <= $x; $c++){
                    echo "*";
                }
                echo "<br>";
            }
            echo "</center>";
        }elseif ($pilih == 3){
            echo "<center>";
            echo "<h3>Deret Bilangan Kelipatan 3</h3>";
            for ($x = 3; $x <= $angka; $x+=3){
                echo "$x";
            }
            echo "</center>";
        }
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>