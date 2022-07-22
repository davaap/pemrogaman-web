<html>

<head>
    <title>KONVERSI NILAI</title>
</head>

<body>
    <h2>KONVERSI NILAI</h2>
    <form method="post" action="">
        Nilai Angka <input type="text" name="nilai">
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        if ($nilai >= 1 and $nilai <= 30) {
            echo "Nilai Huruf E";
        } else if ($nilai >= 31 and $nilai <= 60) {
            echo "Nilai Huruf D";
        } else if ($nilai >= 61 and $nilai <= 70) {
            echo "Nilai Huruf C";
        } else if ($nilai >= 71 and $nilai <= 80) {
            echo "Nilai HurufF B";
        } else if ($nilai >= 81 and $nilai <= 90) {
            echo "$Nilai Huruf B+";
        } else if ($nilai >= 91 and $nilai <= 100) {
            echo "Nilai Huruf A";
        }
    }
    ?>
</body>

</html>