<!DOCTYPE html>
<html>

<head>
    <title>Luas & Volume Balok</title>
</head>

<body>
    <h2>Menghitung Luas & Volume Balok</h2>
    <form method="post" action="">
        <input type="number" name="panjang" placeholder="Masukkan panjang">
        <input type="number" name="lebar" placeholder="Masukkan lebar">
        <input type="number" name="tinggi" placeholder="Masukkan tinggi"><br>
        <select name="operasi">
            <option value="luas">Luas Permukaan Balok</option>
            <option value="volume">Volume Balok</option>
        </select>
        <input type="submit" name="hitung" value="Hitung">
    </form>
    <?php
    if (isset($_POST['hitung'])) {
        include "script_balok.php";
        $x = $_POST['panjang'];
        $y = $_POST['lebar'];
        $z = $_POST['tinggi'];
        $operasi = $_POST['operasi'];

        $hasil = new Balok($x, $y, $z);

        switch ($operasi) {
            case 'volume':
                echo "<br>";
                echo "<input type='text' value=" . $hasil->volume() . "";
                break;
            case 'luas':
                echo "<br>";
                echo "<input type='text' value=" . $hasil->luas() . "";
                break;

            default:
                break;
        }
    } else {
        echo "<input type='text' value='0'> ";
    }

    ?>

</html>
</body>