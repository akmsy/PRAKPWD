<?php 
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Pertemuan 1 belajar HTML</title> -->
    <title>Cat Lovers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <center>
        <h1>INI HEADING 1</h1>
        <h2>INI HEADING 2</h2>
        <h3>INI HEADING 3</h3>
        <h4>INI HEADING 4</h4>
    </center> -->

    <?php 
        $jenis = ['Garong', 'Anggora', 'Gafrield'];
        $deskripsi = ["ini kucing garong sangat ganas", "ini kucing anggora sangat lucu", "ini kucing gafrield sangat imut"];

    ?>
    <main class="container">
        <section class="pertama">
            <h1>Selamat datang dikomunitas Cat Lovers</h1>
            <p class="deskripsi">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, quaerat perspiciatis excepturi magnam nihil provident sed maxime quidem, nostrum, consectetur pariatur necessitatibus rerum id perferendis esse delectus dignissimos! Nesciunt, vitae?</p>
        </section>
        
        <section class="jenis">
            <h2>List Jenis Kucing</h2>
            <ul>
                <?php 
                    for($i = 0; $i < 3; $i++){
                ?>
                <li>
                    <!-- <a href="kucing-garong.jpg">Kucing Garong</a> -->
                    <a href="">Kucing <?php echo $jenis[$i]; ?></a>
                    <p class="penjelasan"><?php echo $deskripsi[$i]; ?></p>
                </li>
                <?php } ?>

                <!-- <li>
                    <a href="kucing-anggora.jpg">Kucing Anggora</a>
                    <p class="penjelasan">ini kucing anggora sangat lucu</p>
                </li>
                <li>
                    <a href="kucing-gafriel.jpg">Gafrield</a>
                    <p class="penjelasan">ini kucing gafrield sangat imut</p>
                </li> -->

            </ul>
        </section>
        
        <section class="join">
            <h2 class="beda">Mari Join Komunitas</h2>
            <?php 
                if (isset($_SESSION['login_error'])){
                    echo '<div class="error-message show">';
                    echo htmlspecialchars($_SESSION['login_error']);
                    echo '</div>';
                    unset($_SESSION['login_error']); // menghapus session setelah ditampilkan
                }
            ?>
            <!-- <form action="halo.php" method="POST"> -->
            <form action="proses_login.php" method="POST">
                <label for="nama" class="nama">Nama:</label>
                <input type="text" id="nama" name="nama">

                <label for="password" class="password">Password:</label>
                <input type="password" id="password" name="password">

                <button class="submit" type="submit" value="kirim">Submit</button>
                <button class="reset" type="reset">Reset</button>

                <!-- <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                        <td><input type="reset"></td>
                    </tr>
                </table> -->
            </form>
        </section>
    </main>
</body>
</html>