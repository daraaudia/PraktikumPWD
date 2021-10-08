<?php // tag pembuka php
$lokasi_file = $_FILES['fupload']['tmp_name']; // membuat variabel untuk menempatkan lokasi file
$nama_file = $_FILES['fupload']['name']; // membuat variabel nama
$deskripsi = $_POST['deskripsi']; // membuat variabel deskripsi
$direktori = "C:/xampp/htdocs/PWD/$nama_file"; // membuat variabel direktori untuk menyimpan file yg akan di upload
if (move_uploaded_file($lokasi_file, $direktori)) // percabangan if jika sesuai, maka akan berhasil
{
echo "Nama File: <b>$nama_file</b> berhasil di upload <br>";
echo "Deskripsi File :<br>$deskripsi";
}
else { // jika tidak sesuai maka file gagal di upload
 echo "File gagal diupload";
 }
?> // tag penutup php
