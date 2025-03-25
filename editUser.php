<!DOCTYPE html>
<html>

<head>
  <title>Sistem Informasi Akademik::Edit Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap533/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/styleku.css">
  <script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
  <script src="bootstrap4/js/bootstrap.js"></script>
</head>

<body>
  <?php
  require "fungsi.php";
  require "head.html";
  $iduser = $_GET['kode'];
  $sql = "SELECT * FROM user WHERE iduser='$iduser'";
  $qry = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($qry);
  ?>
  <div class="utama">
    <h2 class="mb-3 text-center">EDIT DATA USER</h2>
    <div class="row">
      <div class="col-sm-9">
        <form id="editForm" enctype="multipart/form-data" method="post" action="sv_editUser.php">
          <div class="form-group">
            <label for="iduser">ID User:</label>
            <input class="form-control" type="text" name="iduser" id="iduser" value="<?php echo $row['iduser'] ?>" readonly>
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php echo $row['username'] ?>">
          </div>
          <div class="form-group">
            <label for="status">Status:</label>
            <input class="form-control" type="text" name="status" id="status" value="<?php echo $row['status'] ?>">
          </div>
          <div>
            <button class="btn btn-primary" type="submit" id="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="js/alert.js"></script>
  <script src="js/editUser.js"></script>
</body>

</html>