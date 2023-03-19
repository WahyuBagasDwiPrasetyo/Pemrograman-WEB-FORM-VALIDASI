<?php include("components/header.php"); ?>
<?php include("components/menu.php"); ?>

<!-- form -->
<div class="container" id="container">
    <div class="form-container jht-container">
        <form method="post">
            <h2> Menghitung JHT (Jaminan Hari Tua)</h2>
            <input type="number" name="gaji" placeholder="Upah Pekerja" required>
            <button type="submit">Hitung</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <?php
                    if (isset($_POST['gaji'])) {
                        $gaji = $_POST['gaji'];
                        $iuran_jht = $gaji * 0.057;
                        $iuran_jht_karyawan = $gaji * 0.02;
                        $iuran_jht_perusahaan = $gaji * 0.037;

                        echo "<br><h2>Hasil perhitungan:</h2><br>";
                        echo "<p>Iuran JHT: Rp " . number_format($iuran_jht, 0, ',', '.') . " per bulan</p>";
                        echo "<p>Iuran JHT yang dibayar oleh karyawan: Rp " . number_format($iuran_jht_karyawan, 0, ',', '.') . " per bulan</p>";
                        echo "<p>Iuran JHT yang dibayar oleh perusahaan: Rp " . number_format($iuran_jht_perusahaan, 0, ',', '.') . " per bulan</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include("components/footer.php"); ?>