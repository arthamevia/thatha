<?php
            if (isset($_POST['proses'])) {
                $destinasi = $_POST['destinasi'];
                if ($destinasi == '1') {
                    ?>
                  <h2 align="center">Bukit Bintang</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Bukit Bintang</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Pembayaran</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="kirim" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
          <?php
                } elseif ($destinasi == '2') { ?>
                  <h2 align="center">Pantai Sadrana</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Pantai Sadrana</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="submit" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
          <?php } elseif ($destinasi == '3') { ?>
                  <h2 align="center">Candi Borobudur</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Borobudur</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                
          <?php } elseif ($destinasi == '4') { ?>
                  <h2 align="center">Candi Prambanan</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Candi Prambanan</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 50.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ok" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                 
          <?php } elseif ($destinasi == '5') { ?>
                  <h2 align="center">Keraton Yogyakarta</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Keraton Yogyakarta</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
           
          <?php } elseif ($destinasi == '6') { ?>
                  <h2 align="center">Malioboro</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Malioboro</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="ya" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                
         <?php } elseif ($destinasi == '7') { ?>
                  <h2 align="center">Pendopo Lawas -> Cafe</h2>
                  <h3 align="center">Silahkan Pilih Menu Makanan dan Minuman</h3>
                  <form action="" method="post">
                  <table align="center" cellpadding="6">
                    <tr>
                      <th colspan="2">MENU</th>
                    </tr>
                    <tr>
                      <th>Makanan</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Nasi Bakar</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Ayam Bakar</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td>Ikan Bakar</td>
                      <td>Rp. 15.000</td>
                    </tr>
                    <tr>
                      <td>Jamur Crispy</td>
                      <td>Rp. 13.000</td>
                    <tr>
                      <th>Minuman</th>
                      <th>Harga</th>
                    </tr>
                    <tr>
                      <td>Air mineral</td>
                      <td>Rp. 5.000</td>
                    </tr>
                    <tr>
                      <td>Cappucino</td>
                      <td>Rp. 13.000</td>
                    </tr>
                    <tr>
                      <td>Berbagai jus</td>
                      <td>Rp. 8.000</td>
                    </tr>
                    <tr>
                      <td>Lemon Tea</td>
                      <td>Rp. 10.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                  </form>
                  <center>
                      <br>
                  <div  class="cafe">
                        <select name="pilih">
                        <option selected>Pilih Menu</option>
                        <option value="1">Nasi Bakar</option>
                        <option value="2">Ikan Bakar</option>
                        <option value="3">Jamur crispy</option>
                        <option value="4">Air mineral</option>
                        <option value="5">Cappucino</option>
                        <option value="6">Berbagai Jus</option>
                        <option value="7">Lemon Tea</option>
                      </select>
                     <input type="number" name="jumlah" placeholder="Pesan berapa?">
                     <input type="number" name="bayar" placeholder="Bayar">
                     <input type="submit" name="cafe" value="Kirim">
                  </div>
                  </center>
                  <br>
         <?php } elseif ($destinasi == '8') { ?>
                  <h2 align="center">Goa Pindul</h2>
                  <form action="" method="post">
                  <table align="center">
                    <tr>
                      <td>Tempat</td>
                      <td>:</td>
                      <td>Goa Pindul</td>
                    </tr>
                    <tr>
                      <td>Harga Tiket</td>
                      <td>:</td>
                      <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                      <td>Jumlah Tiket</td>
                      <td>:</td>
                      <td><input type="number" name="jumlah"></td>
                    </tr>
                    <tr>
                      <td>Bayar</td>
                      <td>:</td>
                      <td><input type="number" name="bayar"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="goa" value="Kirim"></td>
                    </tr>
                  </table>
                  </form>
                    
          <?php }
            }
            if (isset($_POST['kirim'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 10000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $ta = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $ta = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $ta = $total - $diskon;
                } else {
                    $diskon = 0;
                    $ta = $total;
                }
                $kembalian = $bayar - $ta; ?> 
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $ta; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['submit'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 15000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $ta = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $ta = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $ta = $total - $diskon;
                } else {
                    $diskon = 0;
                    $ta = $total;
                }
                $kembalian = $bayar - $ta; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $ta; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
         <?php
            }
            if (isset($_POST['ok'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 50000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $ta = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $ta = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $ta = $total - $diskon;
                } else {
                    $diskon = 0;
                    $ta = $total;
                }
                $kembalian = $bayar - $ta; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $ta; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['ya'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 5000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $ta = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $ta = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $ta = $total - $diskon;
                } else {
                    $diskon = 0;
                    $ta = $total;
                }
                $kembalian = $bayar - $ta; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $ta; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['goa'])) {
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];
                $total = $jumlah * 100000;
                if ($jumlah >= 7) {
                    $diskon = $total * 0.15;
                    $ta = $total - $diskon;
                } elseif ($jumlah >= 5) {
                    $diskon = $total * 0.1;
                    $ta = $total - $diskon;
                } elseif ($jumlah < 4) {
                    $diskon = $total * 0.05;
                    $ta = $total - $diskon;
                } else {
                    $diskon = 0;
                    $ta = $total;
                }
                $kembalian = $bayar - $ta; ?>
                <br>
                <table align="center">
                  <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td>Rp. <?php echo $ta; ?></td>
                  </tr>
                  <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td>Rp. <?php echo $diskon; ?></td>
                  </tr>
                  <tr>
                    <td>Uang Pembayaran</td>
                    <td>:</td>
                    <td>Rp. <?php echo $bayar; ?></td>
                  </tr>
                  <tr>
                    <td>Kembalian</td>
                    <td>:</td>
                    <td>Rp. <?php echo $kembalian; ?></td>
                  </tr>
                </table>
          <?php
            }
            if (isset($_POST['cafe'])) {
                $pilih = $_POST['pilih'];
                $jumlah = $_POST['jumlah'];
                $bayar = $_POST['bayar'];

                if ($pilih == 1) {
                    $total = $jumlah * 15000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $ta = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $ta = $total;
                    }
                } elseif ($pilih == 2) {
                    $total = $jumlah * 10000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $ta = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $ta = $total;
                    }
                } elseif ($pilih == 3) {
                    $total = $jumlah * 13000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $ta = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $ta = $total;
                    }
                } elseif ($pilih == 4) {
                    $total = $jumlah * 13000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $ta = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $ta = $total;
                    }
                } elseif ($pilih == 5) {
                    $total = $jumlah * 11000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $ta = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $ta = $total;
                    }
                } elseif ($pilih == 6) {
                    $total = $jumlah * 12000;
                    if ($jumlah >= 7) {
                        $diskon1 = '15%';
                        $diskon = $total * 0.15;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 4) {
                        $diskon1 = '10%';
                        $diskon = $total * 0.1;
                        $ta = $total - $diskon;
                    } elseif ($jumlah >= 2) {
                        $diskon1 = '5%';
                        $diskon = $total * 0.05;
                        $ta = $total - $diskon;
                    } else {
                        $diskon1 = '0';
                        $ta = $total;
                    }
                }
                $kembalian = $bayar - $ta; ?>
               <table align="center">
                 <tr>
                   <td>Total Bayar</td>
                   <td>:</td>
                   <td><?php echo $ta; ?></td>
                 </tr>
                 <tr>
                   <td>Diskon</td>
                   <td>:</td>
                   <td><?php echo $diskon1; ?></td>
                 </tr>
                 <tr>
                   <td>Uang Pembayaran</td>
                   <td>:</td>
                   <td><?php echo $bayar; ?></td>
                 </tr>
                 <tr>
                   <td>Kembalian</td>
                   <td>:</td>
                   <td><?php echo $kembalian; ?></td>
                 </tr>
               </table>
          <?php
            }
          ?>