<html>
<head>
    <title>Rental Mobil</title>
</head>
<body>
    <h2>Rental Mobil dengan Supir</h2>
    <form method="post">
        <label>Jumlah Hari Sewa:</label>
        <input type="text" name="hari" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $hari = $_POST['hari'];

        $biaya_mobil = 350000;
        $biaya_supir = 150000;
        $biaya_asuransi = 30000;

        $total = ($biaya_mobil + $biaya_supir) * $hari + $biaya_asuransi;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Hari sewa: $hari <br>";
        echo "Total biaya: Rp " . number_format($total, 0, ',', '.');
    }
    ?>
</body>
</html>