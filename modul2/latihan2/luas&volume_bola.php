<!DOCTYPE html>
<html>

<head>
    <title>Luas & Volume Bola</title>
</head>

<body>
    <h2>Menghitung Luas & Volume Bola</h2>
    <form method="post" action="">
        <input type="number" name="jari" placeholder="Masukan jari-jari">
        <input type="submit" name="hitung" value="Hitung">
        <br>
        <select name="operasi">
            <option value="luas">Luas Permukaan Bola</option>
            <option value="volume">Volume Bola</option>
        </select>

    </form>

    <?php
    if (isset($_POST['hitung'])) {
        include "script_bola.php";
        $r = $_POST['jari'];
        $operasi = $_POST['operasi'];

        $hasil = new Bola($r);

        switch ($operasi) {
            case 'luas':
                echo "<br>";
                echo "<input type='text' value=" . $hasil->luas() . "";
                break;

            case 'volume':
                echo "<br>";
                echo "<input type='text' value=" . $hasil->volume() . "";
                break;

            default:
                break;
        }
    } else {
        echo "<input type='text' value='0'> ";
    }
    ?>

</body>

</html>