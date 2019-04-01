<link rel="stylesheet" type="text/css" href="style1.css">
<body>
<?php
include 'connect.php';

$kode= $_GET['id_tamu'];
$query ="DELETE FROM bukutamu WHERE id_tamu='$kode'";

$result = mysqli_query($konek, $query);
$num = mysqli_affected_rows($konek);

if($num > 0)
{
    echo "Berhasil Hapus <br>";
}
else
{
    echo "Gagal Hapus <br>";
}

echo "<a href='read.php'> Lihat Data</a>";
?>
</body>