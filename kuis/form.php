<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasil.php" method="POST">
        <label for="nama" class="nama">Masukkan Nama Anda</label>
        <input type="text" id="nama" name="nama"> <br><br>

        <label for="jumlah" class="jumlah">Jumlah Anak Ayam</label>
        <input type="number" id="jumlah" name="jumlah"> <br><br>

        <button class="submit" type="submit">Proses</button>
        <button class="reset" type="reset">Batal</button>
    </form>
</body>
</html>