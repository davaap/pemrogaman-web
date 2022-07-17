<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "uts_proweb";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Tidak terkoneksi ke database";
}

// error_reporting(0);

date_default_timezone_set('Asia/Jakarta');

?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 1500px
    }

    .card {
      margin-top: 10px
    }
  </style>
</head>

<body>

</body>

</html>