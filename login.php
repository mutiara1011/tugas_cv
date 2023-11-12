<?php

session_start();
include 'config.php';

if (isset($_POST['ID']) && isset($_POST['Ppassword'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $id = validate($_POST['ID']);
    $password = validate($_POST['Ppassword']);

    if (empty($id)) {
        header('Location: index.php?error=NIM is required');
        exit;
    } elseif (empty($password)) {
        header('Location: index.php?error=Password is required');
        exit;
    } else {
        $sql = "SELECT * FROM data_cv WHERE ID='$id' AND Ppassword='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['ID'] === $id && $row['Ppassword'] === $password) {
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['Nama'] = $row['Nama'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Alamat'] = $row['Alamat'];
                $_SESSION['Telepon'] = $row['Telepon'];
                $_SESSION['Web'] = $row['Web'];
                $_SESSION['Pendidikan'] = $row['Pendidikan'];
                $_SESSION['Pengalaman_Kerja'] = $row['Pengalaman_Kerja'];
                $_SESSION['Keterampilan'] = $row['Keterampilan'];
                $_SESSION['Foto_Path'] = $row['Foto_Path'];
                $_SESSION['Ppassword'] = $row['Ppassword'];
                $_SESSION['Deskripsi'] = $row['Deskripsi'];
                $_SESSION['Hobi'] = $row['Hobi'];
                $_SESSION['Instagram'] = $row['Instagram'];
                $_SESSION['Jenis_Kelamin'] = $row['Jenis_Kelamin'];
                $_SESSION['TTL'] = $row['TTL'];
                $_SESSION['Kewarganegaraan'] = $row['Kewarganegaraan'];
                $_SESSION['Statuss'] = $row['Statuss'];

                header('Location: cv.php');
                exit;
            } else {
                header('Location: index.php?error=Data ini belum terdaftar');
                exit;
            }
        } else {
            header('Location: index.php?error=Data ini belum terdaftar');
            exit;
        }
    }
} else {
    header('Location: index.php');
    exit;
}
