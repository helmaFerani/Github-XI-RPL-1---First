<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESTINASI WISATA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <form action="" method="post">
        <table align=center>
            <th>NO</th>
            <th></th>
            <th>DESTINASI WISATA</th>
            <tr>
                <td>1.</td>
                <td></td>
                <td>Bukit Bintang</td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td>Pantai Sadrana</td>
            </tr>
            <tr>
                <td>3.</td>
                <td></td>
                <td>Candi Borobudur</td>
            </tr>
            <tr>
                <td>4.</td>
                <td></td>
                <td>Candi Prambanan</td>
            </tr>
            <tr>
                <td>5.</td>
                <td></td>
                <td>Keraton Yogyakarta</td>
            </tr>
            <tr>
                <td>6</td>
                <td></td>
                <td>Malioboro</td>
            </tr>
            <tr>
                <td>7.</td>
                <td></td>
                <td>Pendopo Lawas => Caffe</td>
            </tr>
            <tr>
                <td>8.</td>
                <td></td>
                <td>Goa Pindul</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><select name="destinasi" id="">
                    <option value="0">Pilihan Wisata</option>
                    <option value="Bukit Bintang">Bukit Bintang</option>
                    <option value="Pantai Sadrana">Pantai Sadrana</option>
                    <option value="Candi Borobudur">Candi Borobudur</option>
                    <option value="Candi Prambanan">Candi Prambanan</option>
                    <option value="Keraton Yogyakarta">Keraton Yogyakarta</option>
                    <option value="Malioboro">Malioboro</option>
                    <option value="Caffe Pendopo Lawas">Caffe Pendopo Lawas</option>
                    <option value="Goa Pindul">Goa Pindul</option>
                </select></td>
                <td><input type="submit" value="kirim" name="proses"></td>
            </tr>
        </table>
        <?php
            if(isset($_POST['proses'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "Bukit Bintang"){
                    echo "<center>Bukit bintang <br>";
                    echo "<center>Harga Pertiket:Rp10.000";
                    echo '<table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>total:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';             
                }elseif($destinasi == "Pantai Sadrana"){
                    echo "<center><h2>Pantai Sadrana</h2>";
                    echo "<center>Harga Pertiket:Rp15.000";
                    echo '<table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="submit" value="proses"></td></tr><br>';
                    echo '</table>';
                    
                }elseif($destinasi == "Candi Borobudur"){
                    echo "<center><h2>Candi Borobudur</h2>";
                    echo "<center>Harga Pertiket:Rp50.000";
                    echo '<table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="ok" value="proses"></td></tr><br>';
                    echo '</table>';
                    
                }
                elseif($destinasi == "Candi Prambanan"){
                    echo "<center><h2>Candi Prambanan</h2>";
                    echo "<center>Harga Pertiket:Rp50.000";
                    echo '<table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="ok" value="proses"></td></tr><br>';
                    echo '</table>';
                } 
                elseif($destinasi == "Keraton Yogyakarta"){
                    echo "<center><h2>Keraton Yogyakarta</h2>";
                    echo "<center>Harga Pertiket:Rp5.000";
                    echo '<table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="ya" value="proses"></td></tr><br>';
                    echo '</table>';
                   
                }   
                elseif($destinasi == "Malioboro"){
                    echo "<center><h2>Malioboro</h2>";
                    echo "<center>Harga Pertiket:Rp5.000";
                    echo '<table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="ya" value="proses"></td></tr><br>';
                    echo '</table>';
                }   
                elseif($destinasi == "Caffe Pendopo Lawas"){
                    echo "<center><h2>Pendopo Lawas</h2>";
                    echo '<table>';
                    echo '<center><tr><td>Makanan</td><td>:</td><td>kuetiaw Rp.15,000</td><tr>';
                    echo '<center><tr><td></td><td></td><td>seblak spagheti Rp.10,000</td>';
                    echo '<center><tr><td></td><td></td><td>yam goreng special Rp.25,000</td>';
                    echo '<center><tr><td>Minuman</td><td>:</td><td>creamylatte Rp.10,000</td><tr>';
                    echo '<center><tr><td></td><td></td><td>milshake susu special Rp.18,000</td>';
                    echo '<center><tr><td></td><td></td><td>air putih Rp.8000</td>';
                    echo '<center><tr><td>Makanan:<td></td></td><td><input type="text" name="makanan"></td></tr><br>';
                    echo '<center><tr><td>Minuman:<td></td></td><td><input type="text" name="minuman"></td></tr><br>';
                    echo '<center><tr><td>bayar:<td></td></td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="lawas" value="proses"></td></tr><br>';
                }   
                elseif($destinasi == "Goa Pindul"){
                    echo "<center><h2>Goa Pindul</h2>";
                    echo "<center>Harga Pertiket:Rp100.000";
                    echo '<center><table>';
                    echo '<center><tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<center><tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<center><tr><td><input type="submit" name="goa" value="proses"></td></tr><br>';
                    echo '</table>';
                    
                }
            }
            if(isset($_POST['kirim'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*10000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.20;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.10;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "<center>total bayar: $totalakhir<br>";
                echo "<center>diskon: $diskon<br>";
                echo "<center>bayar : $bayar<br>";
                echo "<center>kembalian :$kembalian<br>";
            }
            if(isset($_POST['submit'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*15000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "<center>total bayar: $totalakhir<br>";
                echo "<center>diskon: $diskon<br>";
                echo "<center>bayar : $bayar<br>";
                echo "<center>kembalian :$kembalian<br>";
            }
            if(isset($_POST['ok'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*50000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.20;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.10;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "<center>total bayar: $totalakhir<br>";
                echo "<center>diskon: $diskon<br>";
                echo "<center>bayar : $bayar<br>";
                echo "<center>kembalian :$kembalian<br>";
            }
            if(isset($_POST['ya'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*5000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.20;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.10;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "<center>total bayar: $totalakhir<br>";
                echo "<center>diskon: $diskon<br>";
                echo "<center>bayar : $bayar<br>";
                echo "<center>kembalian :$kembalian<br>";
            }
            if(isset($_POST['goa'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*100000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.20;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.10;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "<center>total bayar: $totalakhir<br><center>";
                echo "<center>diskon: $diskon<br><center>";
                echo "<center>bayar : $bayar<br><center>";
                echo "<center>kembalian :$kembalian<br><center>";
            }
            if(isset($_POST['lawas'])){
                $makanan=$_POST['makanan'];
                $minuman=$_POST['minuman'];
                $bayar=$_POST['bayar'];
                $makanan=20000;
                $minuman=8000;
                $total=$makanan+$minuman;
                $kembalian=$bayar-$total;
                echo "<br>";
                echo "<center> Total Bayar: $total<br><center>";
                echo "bayar : $bayar <br> <center>";
                echo "Kembali : $kembalian<br> <center>";
            }
        ?>
    </form>    
</body>