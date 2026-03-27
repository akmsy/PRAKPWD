<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $jumlahAyam = $_POST['jumlah'];
    ?>

    <p>Anak Ayam Pak Soleh ada : <?php echo $jumlahAyam ?></p>
    
    <?php 
        for ($i=$jumlahAyam ; $i >= 1; $i--) { 
        echo "Anak ayam turun $i <br>";
            if ($i == 1) {
                echo "Mati satu Pak Soleh Galau... <br>";
            } else {
                echo "Mati satu tinggal " . ($i-1) . "<br>";
            }
        }
    ?>
</body>
</html>