<?php
include "koneksi.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM mahasiswi";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<mahasiswi>";
 echo"<nim>",$data['nim'],"</nim>";
 echo"<name>",$data['name'],"</name>";
 echo"<jkel>",$data['jkel'],"</jkel>";
 echo"<alamat>",$data['alamat'],"</alamat>";
 echo"<tgllhr>",$data['tgllhr'],"</tgllhr>";
 echo "</mahasiswi>";
}
echo "</data>";
?>