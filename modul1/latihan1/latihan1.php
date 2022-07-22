<?php
error_reporting(0);
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$hasil = $_POST['hasil'];

if (isset($_POST['btambah'])) {
    $hasil = $input1 + $input2;
}

if (isset($_POST['bkurang'])) {
    $hasil = $input1 - $input2;
}

if (isset($_POST['bkali'])) {
    $hasil = $input1 * $input2;
}

if (isset($_POST['bbagi'])) {
    $hasil = $input1 / $input2;
}

if (isset($_POST['bmod'])) {
    $hasil = $input1 % $input2;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
</head>

<body>

    <form action="" method="post">

        <h3>Angka input</h3>

        <input type="text" name="input1">
        <input type="text" name="input2">
        = <input type="text" value="<?php echo $hasil; ?>">

        <h3>Operator</h3>
        <input type="submit" name="btambah" value="+">
        <input type="submit" name="bkurang" value="-">
        <input type="submit" name="bkali" value="x">
        <input type="submit" name="bbagi" value="/">
        <input type="submit" name="bmod" value="Mod">
</body>

</html>