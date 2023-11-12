<?php

include 'config.php';

if (isset($_POST['ID'])) {
    // Pastikan Anda telah memulai sesi sebelumnya
    session_start();

    // Ambil id dari sesi pengguna
    if (isset($_SESSION['ID'])) {
        $id = $_SESSION['ID'];

        // Ambil data yang akan diperbarui dari formulir
        $nama = $_POST['Nama'];
        $email = $_POST['Email'];
        $alamat = $_POST['Alamat'];
        $telepon = $_POST['Telepon'];
        $pendidikan = $_POST['Pendidikan'];
        $pengalaman_kerja = $_POST['Pengalaman_Kerja'];
        $keterampilan = $_POST['Keterampilan'];
        $foto_path = $_POST['Foto_Path'];
        $deskripsi = $_POST['Deskripsi'];
        $hobi = $_POST['Hobi'];
        $instagram = $_POST['Instagram'];
        $jenis_kelamin = $_POST['Jenis_Kelamin'];
        $ttl = $_POST['TTL'];
        $kewarganegaraan = $_POST['Kewarganegaraan'];
        $status = $_POST['Statuss'];

        // Buat pernyataan SQL UPDATE
        $sql = 'UPDATE data_cv SET Nama=?, Alamat=?, Telepon=?, Email=?, Pendidikan=?, Pengalaman_Kerja=?, Keterampilan=?, Foto_Path=?, Deskripsi=?, Hobi=?, Instagram=?, Jenis_Kelamin=?, TTL=?, Kewarganegaraan=?, Statuss=? WHERE ID=?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssssssssssssi', $nama, $alamat, $telepon, $email, $pendidikan, $pengalaman_kerja, $keterampilan, $foto_path, $deskripsi, $hobi, $instagram, $jenis_kelamin, $ttl, $kewarganegaraan, $status, $id);        
        if ($stmt->execute()) {
            session_start();

            session_unset();
            session_destroy();

            header('Location: index.php?error=Berhasil Update!');
            exit;
        } else {
            exit('Gagal memperbarui profil: '.$stmt->error);
        }

        $stmt->close();
    } else {
        exit('Sesi tidak ditemukan. Pastikan Anda sudah login sebelum mengakses halaman ini.');
    }
} else {
    header('Location: update.php?error=Data tidak ditemukan'); // Handle jika 'submit' tidak dijalankan
    exit;
}

