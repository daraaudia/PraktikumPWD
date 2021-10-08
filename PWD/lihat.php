<?php // tag pembuka php
echo "<head><title>My Guest Book</title></head>"; //menampilkan judul pada halaman sebuah website
$fp = fopen("guestbook.txt", "r"); // mendefinisikan variabel $fp untuk membuka file guestbook.txt dengan fungsiopen
echo "<table border=0>"; // membuat table pada halaman website
while ($isi = fgets($fp, 80)) {
    $pisah = explode("|", $isi); // membuat variabel $pisah yang digunakan untuk memisahkan string pada file guesbook
    echo "<tr><td>Nama</td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat</td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Email</td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Status</td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Komentar</td><td>: $pisah[4]</td></tr>
    <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "Isi Form Buku Tamu<br><a href=tampilan.php>Klik Disini</a>"; // membuat hyperlink yang menuju ke halaman tampilan.php

?>
