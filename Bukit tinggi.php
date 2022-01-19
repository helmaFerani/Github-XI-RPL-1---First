<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit tinggi</title>
</head>
<body>
<center>
    <h1>Pembayaran</h1>

    <form method="post">
    <table>
        <tr>
            <td>Pilih</td>
            <td><input type="number" name="pilih"></td>
        </tr>
        <tr>
            <td></td>
            <td><button name="kirim">OK</button></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['kirim'])) {
$pilih = $_POST['pilih'];

if ($pilih == 1) {
    echo "1.Bukit bintang <br>";
    echo "Dengan harga diskon 5%";
}
else if ($pilih == 2) {
    echo "2.Pantai sadranan <br>";
    echo "Dengan harga diskon 7%";
}
else if ($pilih == 3) {
    echo "3.Candi borobudur <br>";
    echo "Dengan harga diskon 10%";
}
else if ($pilih == 4) {
    echo "4.Candi prambanan <br>";
    echo "Dengan harga diskon 10%";
}
else if ($pilih == 5) {
    echo "5.Keraton yogyakarta <br>";
    echo "Dengan harga diskon 2%"; 
}
else if ($pilih == 6) {
    echo "6.Malioboro <br>";
    echo "Dengan harga diskon 2%";
}
else if ($pilih == 7) {
    echo "7.Pendopo lawas <br>";
    echo "Dengan menu makan dan minum";
}
else if ($pilih == 8) {
    echo "8.Goa pindul <br>";
    echo "Dengan harga diskon 50%";
}
}
?>
</center>
</body>
</html>