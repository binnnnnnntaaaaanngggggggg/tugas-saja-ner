<html>
<head>
    <title>Upah Pekerja</title>
</head>
<body>
    <h2>Hitung Upah Pekerja</h2>
    <form method="post">
        <button type="submit" name="hitung">Hitung Upah Mingguan & Bulanan</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $upah_perhari = 125000;
        $jam_perhari = 8;
        $jumlah_hari = 7; // seminggu
        $upah_lembur = 35000;
        $jumlah_lembur = 2; // kali lembur seminggu
        $jam_lembur = 3; // jam lembur per kali

        // Hitung mingguan
        $upah_mingguan = ($upah_perhari * $jumlah_hari) + ($jumlah_lembur * $jam_lembur * $upah_lembur);

        // Hitung bulanan (4 minggu)
        $upah_bulanan = $upah_mingguan * 4;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Upah Mingguan: Rp " . number_format($upah_mingguan, 0, ',', '.') . "<br>";
        echo "Upah Bulanan: Rp " . number_format($upah_bulanan, 0, ',', '.');
    }
    ?>
</body>
</html>