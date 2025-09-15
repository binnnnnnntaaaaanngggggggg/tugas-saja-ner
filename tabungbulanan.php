<html>
<head>
    <title>Tabungan Bulanan</title>
</head>
<body>
    <h2>Hitung Tabungan Bulanan</h2>
    <form method="post">
        <label>Saldo Awal :</label>
        <input type="text" name="saldo_awal" required><br><br>
        <label>Bunga perBulan (%) :</label>
        <input type="text" name="bunga" required><br><br>
        <label>Biaya Administrasi :</label>
        <input type="text" name="admin" required><br><br>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $saldo_awal = $_POST['saldo_awal'];
        $bunga = $_POST['bunga'];
        $admin = $_POST['admin'];

        $saldo_akhir = $saldo_awal + ($saldo_awal * $bunga / 100) - $admin;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "<br>";
        echo "Bunga: $bunga % <br>";
        echo "Biaya Administrasi: Rp " . number_format($admin, 0, ',', '.') . "<br>";
        echo "Saldo Akhir Bulan: Rp " . number_format($saldo_akhir, 0, ',', '.');
    }
    ?>
</body>
</html>