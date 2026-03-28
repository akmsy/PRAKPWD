<?php 
    session_start();
    include 'koneksi.php';

    $nama = $_POST['nama']; // nama variable yang ada di kurung siku harus disamakan dengan nama field tabel di database dan id di html
    $pass = $_POST['password'];
    $query = "SELECT * FROM akun WHERE nama='$nama' AND password='$pass'";

    $result = mysqli_query($koneksi, $query);
                        // kita harus tau larinya ke database mana // cek data yang udah diinputin ada ngga sih yang sama sama tabel akunnya

    if (mysqli_num_rows($result) > 0){
        // ngecek yang ada di baris" tabelnya
        $user = mysqli_fetch_assoc($result);
        //session ini variabel baru
        $_SESSION['user_nama'] = $user['nama'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['loged_in'] = true;
        //$_SESSION['logged_success'] = "Login berhasil!";
        header('Location: halo.php');
        exit(); // menghentikan eksekusi script
    } else {
        $_SESSION['login_error'] = "Email atau password salah. Silakan coba lagi!";
        header('Location: pertemuan1.php');
        exit();
    }
?>