<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Vaksin</title>

  </head>
  <body>
  <div class="card container" style="width: 35rem;">
  <div class="card-body container">
      
  <center>
    <h2>Syarat Masuk Ke MIKO MALL</h2>
    <br>
    <form action="" method="post">
<<<<<<< HEAD
        <table class= "table table-secondary table-striped">
=======
        <table>
>>>>>>> 2616c086930f8fefa55ca391ef1a153ac5ccb8b3
            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Status Vaksin</td>
                <td>:</td>
                <td><select name="status" id="">
                    <option value="">------Status Vaksin------</option>
                    <option value="Sudah Vaksin">Sudah Vaksin</option>
                    <option value="Belum Vaksin">Belum Vaksin</option>
                </select></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="KIRIM" name="kirim"></td>
        </tr>
        </table>
    </form>
</center>
<hr>
<center>
<?php

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "Nama : $nama<br>";
    echo "Status : $status<br>";
    echo "<br>";
    echo "<br>";
    if ($status == "Sudah Vaksin") {
<<<<<<< HEAD
        echo "<h3>Diizinkan</h3><br>" ;
    } else {
        echo "<h3>Tidak Diizinkan</h3><br>";
=======
        echo "Diizinkan<br>" ;
    } else {
        echo "Tidak Diizinkan<br>";
>>>>>>> 2616c086930f8fefa55ca391ef1a153ac5ccb8b3
        echo "<br>";
        echo '<a href="https://www.pedulilindungi.id/*">Silahkan Daftar Vaksin</a>';
    }
    

}
?>

</center>

  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>