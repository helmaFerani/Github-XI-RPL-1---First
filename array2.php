<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>
<hr>
<?php
// membuat array
$cita_cita = [
    "Dokter",
    "Guru",
    "Perusahaan"
];

// menambahkan isi pada idenks ke-3
$cita_cita[3] = "Pengusaha";

// menambahkan isi pada idenks terakhir
$hobi[] = "petani";

// cetak array dengan perulangan
foreach($cita_cita as $cita_citaku){
    echo $cita_citaku."<br>";
}
?>