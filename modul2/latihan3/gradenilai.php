<!DOCTYPE html>
<html>

<head>
    <title>Grade Nilai</title>
</head>

<body>
    <h2>Konversi Nilai</h2>
    <form method="post" action="">
        <input type="number" name="nilai" placeholder="Masukkan Nilai">
        <br>
        <input type="submit" name="konversi" value="Konversikan">
    </form>
</body>
<?php
if (isset($_POST['konversi'])) {
    include "script_nilai.php";
    $n = $_POST['nilai'];

    $hasil = new Murid($n);

    echo "<input type='text' value=" . $hasil->grade() . "";
}
?>

</html>