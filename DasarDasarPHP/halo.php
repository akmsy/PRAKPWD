<?php
    session_start();
    include 'koneksi.php';

    if (!isset($_SESSION['loged_in']) || $_SESSION['loged_in'] !== true){ // jika session yang loged_in tidak sama dengan true, harus dibalikin ke pertemuan 1
        header('Location: pertemuan1.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php 
        $nama = $_POST['nama'];
    ?>
    <h1>
        <?php 
            if ($nama != NULL){
        ?>    

        Welcome <?php echo $nama ?>!!</h1>

        <img src="kucing-garong.jpg" alt="kucing garong">
        <button type="button" class="btn btn-secondary">Logout</button>
    
        <?php }
            else {
        ?>
        <h1>Welcome to Community</h1>
            <?php } ?>
</body>
</html>