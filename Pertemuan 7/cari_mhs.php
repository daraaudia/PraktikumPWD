<?php
include 'koneksi.php';
?>

<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
    <label for="">Cari</label>
    <input type="text" name="cari">
    <input type="submit" value="cari">
</form>

<?php
if (isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b> Hasil Pencarian : ".$cari."</b>";
}
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
    <?php
    if (isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql = "SELECT * FROM mahasiswi WHERE name like '%".$cari."%'";
        $tampil = mysqli_query($con,$sql);
    } else {
        $sql = "SELECT * FROM mahasiswi";
        $tampil = mysqli_query($con,$sql);
    }
    $no = 1;
    
    while($r = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $r['name']; ?></td>
        </tr>
    <?php } ?>    
</table>