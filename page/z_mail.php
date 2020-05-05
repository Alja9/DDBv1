<?php
include "z_koneksi.php";
$no_tiket = $_GET['no_tiket'];
$query = "select * from data_tiket where no_tiket='$no_tiket'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);

$to = $data['email'];
$subject = "Tiket Anda Sudah aktif";
$message = "
  <html>
  <head>
  <title>Mengirim sebuah email</title>
  </head>
  <body> <h1>
  Mengirim Sebuah Email</h>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
	Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
	at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi
	id quod mazim placerat facer possim assum Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
  </html>
  ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: admin@daradaengbrawijaya.com' . "\r\n";
$headers .= 'Cc: $data['email']' . "\r\n";
mail($to,$subject,$message,$headers);

header("location : z_tampil.php");
?>