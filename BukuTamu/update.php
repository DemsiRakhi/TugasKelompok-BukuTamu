<?php

include 'connect.php';

$id = $_POST['id']; 
$tgl = date("d M Y H:m:s");
$nama = $_POST['nama'];
$email = $_POST['email'];
$komen = $_POST['komen'];

$query ="UPDATE bukutamu SET   waktu= '$tgl',
                               nama_tamu = '$nama',
                               email = '$email',
                               komentar = '$komen'
        WHERE id_tamu = '$id'";

$result = mysqli_query($konek, $query);
$num = mysqli_affected_rows($konek);

if($num > 0)
{
    echo "Berhasil Ubah Data <br>";
}
else
{
    echo "Gagal Ubah Data <br>";
}

echo "<a href='read.php'> Lihat Data</a>";
?>