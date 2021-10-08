<?php // tag pembuka php
$nama = $_POST['nama']; // membuat variabel nama
$alamat = $_POST['alamat']; // membuat variabel alamat
$email = $_POST['email']; // membuat variabel email
$status = $_POST['status']; // membuat variabel status
$komentar = $_POST['komentar']; // membuat variabel komentar

echo "<head><title>My Guest Book</head></title>"; // menampilkan judul pada halaman sebuah website
$fp = fopen("guestbook.txt", "a+"); // mendefinisikan variabel $fp untuk membuka file guestbook.txt dengan fungsiopen
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=tampilan.php>Isi Buku Tamu</a><br>"; // membuat hyperlink menuju tampilan.php
echo "<a href=lihat.php>Lihat Buku Tamu</a><br>"; // membuat hyperlink menuju lihat.php

?> // tag penutup php
