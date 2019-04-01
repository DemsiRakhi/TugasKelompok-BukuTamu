<?php
include 'connect.php';

$query = "SELECT * FROM bukutamu";

$result = mysqli_query($konek, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style1.css">
<html>
<body>
    <table border="1">
       <tr>
          <th>No.</th>
          <th>Waktu</th>
          <th>Nama Tamu</th>
          <th>Email</th>
          <th>Komentar</th>
          <th>Aksi</th>
       </tr>
<?php
if($num > 0)
{
    $no = 1;
    while ($data = mysqli_fetch_assoc($result)) { ?>
       <tr>
          <td> <?php echo $no; ?> </td>
          <td> <?php echo $data['waktu'] ?> </td>
          <td> <?php echo $data['nama_tamu'] ?> </td>
          <td> <?php echo $data['email'] ?> </td>
          <td> <?php echo $data['komentar']; ?> </td>
          <td>
             <a href="form-update.php?id_tamu=<?php echo $data['id_tamu']; ?>">Edit</a> |
             <a href="delete.php?id_tamu=<?php echo $data['id_tamu']; ?> "onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus</a> |
             <a href="form_bktamu.html">Tambah Data</a> |
          </td>
       </tr>
    </body>
    <?php
    $no++;
    }
}
else
{
    echo "<tr> <td colspan='7'> Tidak ada data </td></tr>";
}
?>