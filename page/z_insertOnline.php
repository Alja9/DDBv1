<?php

include "z_koneksiOnline.php";
$query = "SELECT count(*) as total from ddbgts";
$result=mysqli_query($conn, $query);
$data=mysqli_fetch_assoc($result);

//Meyimpan data ke variabel
$no_tiket       = 401 + $data['total'];
if($no_tiket > 500) {
    echo "<script>alert('MOHON MAAF, TIKET SUDAH HABIS!!!');history.go(-1);</script>";
} else {
    $firstname = $_POST['firstname'];
    $asal = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $soal = $_POST['soal'];

//SQL query untuk insert data
    $query = "INSERT INTO `ddbgts` (`no_tiket`, `nama`, `asal`, `hp`, `soal`, `email`) VALUES ('$no_tiket', '$firstname', '$asal', '$phone', '$soal', '$email')";
    mysqli_query($conn, $query);

//kembali ke halaman index
    echo "<script>alert('Terimakasih, Registrasi anda telah berhasil....');window.location='ddbgtsnew.html'</script>";

}
?>