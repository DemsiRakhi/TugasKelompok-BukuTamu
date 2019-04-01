<?php

include 'connect.php';

$kode = $_GET['id_tamu'];

$query = "SELECT * FROM bukutamu";

$result = mysqli_query($konek, $query);

$data_dosen = mysqli_fetch_assoc($result);

?>
<html>
    <head>
        <title>Buku Tamu</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
        <h1>Ubah Buku Tamu</h1>
        <hr>
        <div class="con">
        <form action="update.php" method="POST">
        <pre>
            id_tamu :
            <input type="text" name="id" value="<?php  echo $kode?>">
            Nama Anda : 
            <input type = "text" name = "nama" size="25" maxlength="50">
            Email Address : 
            <input type = "text" name = "email" size="25" maxlength="50">
            Komentar : 
            <textarea name = "komen" cols="40" rows="5"></textarea>
            <button type="submit">Kirim</button><button type="reset">Ulangi</button>
        </div>
        </pre>
    </form>
    </body>
</html>