<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Dasar</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Pekerjaan:</label><br>
        <select name="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Guru">Guru</option>
            <option value="Pegawai">Pegawai</option>
            <option value="Desainer">Desainer</option>
        </select><br><br>

        <input type="submit" value="Tampilkan">
    </form>

    <hr>

    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $tgl = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $umur = date('Y') - date('Y', strtotime($tgl));

        switch ($pekerjaan) {
            case "Programmer": $gaji = 8000000; break;
            case "Guru": $gaji = 5000000; break;
            case "Pegawai": $gaji = 6000000; break;
            case "Desainer": $gaji = 7000000; break;
            default: $gaji = 0;
        }

        echo "<h3>Hasil Data</h3>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: " . date('d-m-Y', strtotime($tgl)) . "<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>
