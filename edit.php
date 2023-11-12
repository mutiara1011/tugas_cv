<?php
session_start();
if (isset($_SESSION['ID']) && isset($_SESSION['Ppassword'])) {
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>

    .container {
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 20px;
    padding-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    background-color: rgb(240, 240, 240);
    }

    body {
        padding-bottom: 50px;
        padding-top: 50px;
    }

    .form-container {
    background: #f5f5f5;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .col{
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
<body>
  <div class="container">
        <form action="update.php" method="post">
            <h2 style="text-align: center; padding-bottom: 20px">Update Data</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="Foto_Path" class="col-sm-3 col-form-label">Pas Foto</label>
                        <div class="col-sm-9">
                        <input type="teks" name="Foto_Path" class="form-control" placeholder="URL Foto anda" value="<?php echo $_SESSION['Foto_Path']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                        <input type="text" name="Nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $_SESSION['Nama']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ID" class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">
                        <input type="number" name="ID" class="form-control" placeholder="ID Anda" value="<?php echo $_SESSION['ID']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                        <input type="text" name="Deskripsi" class="form-control" placeholder="Deskripsi Anda" value="<?php echo $_SESSION['Deskripsi']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <input type="email" name="Email" class="form-control" placeholder="Email anda" value="<?php echo $_SESSION['Email']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Telepon" class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                        <input type="number" name="Telepon" class="form-control" placeholder="Nomor HP" value="<?php echo $_SESSION['Telepon']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Instagram" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-9">
                        <input type="text" name="Instagram" class="form-control" placeholder="Instagram anda" value="<?php echo $_SESSION['Instagram']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="TTL" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm-9">
                        <input type="text" name="TTL" class="form-control" placeholder="Tempat, Tanggal Lahir" value="<?php echo $_SESSION['TTL']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        <input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="<?php echo $_SESSION['Alamat']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Jenis_Kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                        <input type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis_Kelamin" value="<?php echo $_SESSION['Jenis_Kelamin']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Kewarganegaraan" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-9">
                        <input type="text" name="Kewarganegaraan" class="form-control" placeholder="Kewarganegaraan anda" value="<?php echo $_SESSION['Kewarganegaraan']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Statuss" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                        <input type="text" name="Statuss" class="form-control" placeholder="Status anda" value="<?php echo $_SESSION['Statuss']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Pendidikan" class="col-sm-3 col-form-label">Pendidikan</label>
                        <div class="col-sm-9">
                        <input type="text" name="Pendidikan" class="form-control" placeholder="Pendidikan anda" value="<?php echo $_SESSION['Pendidikan']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Pengalaman_Kerja" class="col-sm-3 col-form-label">Pengalaman Kerja</label>
                        <div class="col-sm-9">
                        <input type="text" name="Pengalaman_Kerja" class="form-control" placeholder="Pengalaman kerja anda" value="<?php echo $_SESSION['Pengalaman_Kerja']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Keterampilan" class="col-sm-3 col-form-label">Keterampilan</label>
                        <div class="col-sm-9">
                        <input type="text" name="Keterampilan" class="form-control" placeholder="Keterampilan anda" value="<?php echo $_SESSION['Keterampilan']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Hobi" class="col-sm-3 col-form-label">Hobi</label>
                        <div class="col-sm-9">
                        <input type="teks" name="Hobi" class="form-control" placeholder="Hobi" value="<?php echo $_SESSION['Hobi']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <center><button type="submit" class="btn btn-primary">Update Data</button></center>
        </form>
    </div>
</body>
</html>
<?php
} else {
    header('Location: index.php?error=Belum login');
    exit;
}
?>