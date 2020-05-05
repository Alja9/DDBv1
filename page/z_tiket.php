<?php
/**
 * Created by PhpStorm.
 * User: Rifan Ganbatte :D (ya ampun)
 * Date: 1/3/2018
 * Time: 9:19 PM
 */
include "z_koneksi.php";

$no_tiket = $_POST['tiket'];
$query = "SELECT no_tiket, nama FROM data_tiket WHERE no_tiket LIKE '". $no_tiket ."'";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
    $tiket = $row['no_tiket'];
    $nama  = $row['nama'];
}
header ("Content-type: image/jpg");
//$handle = ImageCreate (1080, 22) or die ("Cannot Create image");
$handle = imagecreatefromjpeg('tiket.jpg') or die ("Cannot Create image");
$bg_color = ImageColorAllocate ($handle, 255, 0, 0);
$txt_color = ImageColorAllocate ($handle, 0, 0, 0);
ImageTTFText ($handle, 32, 0, 157, 120, $txt_color, "C:\Windows\Fonts/Calibri.ttf", "$nama");
ImageTTFText ($handle, 30, 0, 180, 765, $txt_color, "C:\Windows\Fonts/Arial.ttf", "$tiket");
ImagePng ($handle);
?>