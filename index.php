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
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  form{
    background-color: rgb(240, 240, 240);
    border-radius: 10px;
    padding: 50px 80px 50px 80px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
</style>
<body>
  <div class="container">
    <form action="login.php" method="post">
      <h2 style="text-align: center;">LOGIN</h2>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div class="mb-3">
        <input type="number" name="ID" class="form-control" placeholder="ID">
      </div>
      <div class="mb-3">
        <input type="password" name="Ppassword" class="form-control" placeholder="Password">
      </div>
      <center><button type="submit" class="btn btn-primary">Login</button></center>
      
    </form>
  </div>
</body>
</html>
