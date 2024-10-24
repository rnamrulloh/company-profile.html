<?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'admin@admin.com' && $password == 'admin') {
            header('Location: ../dashbord.php');  // satu folder di atas, lalu file dashboard.php  // sesuaikan dengan lokasi file yang benar  // Memastikan rute benar
            exit;  // Pastikan skrip berhenti setelah redirect
        } else {
            echo "Email atau password salah";
        }
    } else {
        echo "Harap isi email dan password.";
    }
?>
