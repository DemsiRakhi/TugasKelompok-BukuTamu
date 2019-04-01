<?php
include 'connect.php';
?>
<html>
<head>
    <title>Simpan Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<?php
$tgl = date("d M Y H:m:s");
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$q = "INSERT INTO `bukutamu`( `waktu`, `nama_tamu`, `email`, `komentar`) VALUES ('$tgl','$nama','$email','$komentar')";
$query = mysqli_query($konek,$q);

if($query > 0){

} else {
    echo "Gagal";
}

?>
<h1>Proses Simpan Buku Tamu</h1>
<div class="menu">
            <ul class="horizontal">
                <li><a href="form_bktamu.html">Masuk Tamu</a></li>
                <li><a href="read.php">Lihat Daftar Tamu</a></li>
                <li><a href="bukutamu.dat">Lihat History</a></li>
            </ul>
        </div>

<hr>
Nama Anda       : <?php echo $nama;?>
<br>
Email Address   : <?php echo $email;?>
<br>
Komentar        :
<textarea name="komentar" cols="40" rows="5"><?php echo $komentar ?></textarea>

<?php
//Proses Simpan
$fp=fopen("bukutamu.dat","a+");
fputs($fp,$nama."|".$email."|".$komentar."\n");
fclose($fp);
?>
<p>Simpan telah berhasil dilakukan!</p>

</body>
</html>