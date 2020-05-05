<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<table border="1">
    <tr>
        <th>No Tiket</th>
        <th>Nama Peserta</th>
        <th>Asal Sekolah</th>
        <th>No Handphone</th>
        <th>Soal</th>
        <th>Email</th>
    </tr>
<?php
include "z_koneksiOffline.php";
//perintah untuk menampilkan data, id_brg terbesar ke kecil
$tampil = "SELECT * FROM offline ORDER BY no_tiket DESC";
//perintah menampilkan data dikerjakan
$sql = mysqli_query($conn, $tampil);

//tampilkan seluruh data yang ada pada tabel user
while($data = mysqli_fetch_array($sql)) {

    echo "
 <tr>
 <td>" . $data['no_tiket'] . "</td>
 <td>" . $data['nama'] . "</td>
 <td>" . $data['asal'] . "</td>
 <td>" . $data['hp'] ."</td>
 <td>" . $data['soal'] . "</td>
 <td>" . $data['email'] . "</td>
 <td><a href='#?no_tiket=$data[no_tiket]'>Aktif</a></td>
 
   </tr>";
}
?>
<!-- <td><a href='z_mail.php?no_tiket=$data[no_tiket]'>Aktif</a></td> -->
</body>
</html>