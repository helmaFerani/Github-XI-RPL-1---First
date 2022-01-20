<?php

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// menghapus kucing
unset($hewan[1]);

echo $hewan[0]."<br>";

echo $hewan[2]."<br>";

echo "<hr>";

echo "<pre>";
print_r($hewan);
echo "</pre>";

?>



<?php
// membuat array
$benda = [
    "kursi",
    "meja",
    "lemari"
];

// menghapus array
unset($benda[1]);

echo $benda[0]."<br>";


echo "<hr>";

echo "<pre>";
print_r($benda);
echo "</pre>";
?>