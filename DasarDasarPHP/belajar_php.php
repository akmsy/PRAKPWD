<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center;">
    <?php 
        $nama = "Akma";
        $tanggal = date("d F Y");

        echo "Hari ini saya belajar PHP <br>";
        
        echo("Nama: $nama AAA <br>");
        echo("Tanggal: $tanggal <br>");
        echo(date("d F Y"));
    ?>

    <br><br>
    
    <h2>Form Data Mahasiswa</h2>
    <form action="hasil.php" method="POST">
        Nama: <input type="text" name="nama"><br><br>
        NIM: <input type="text" name="nim"><br><br>
        Prodi: <input type="text" name="prodi"><br><br>
        Fakultas: <input type="text" name="fakultas"><br><br>
        Angkatan: <input type="text" name="angkatan"><br><br>

        <input type="submit" value="Submit"> <input type="reset">
    </form>

    <br><br>

    <?php 
        $hari = date('2');
        $harga = 100;
        $pengunjung = 12;

        echo("Jumlah pengunjung hari ini : $pengunjung <br>");
        echo"Total pendapatan : ";
        echo $harga * $pengunjung;
        // if ($hari == "Tuesday") {
        //     echo "Hari yang menyenangkan";
        // } else {
        //     echo "Hari yang melelahkan";
        // }
    ?>
</body>
</html>