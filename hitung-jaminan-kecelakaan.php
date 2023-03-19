<?php include("components/header.php"); ?>
<?php include("components/menu.php"); ?>

<!-- form -->
<div class="container" id="container">
    <div class="form-container jht-container">
        <form method="post">
            <h2>Menghitung JKK (Jaminan Kecelakaan Kerja)</h2>
            <input type="number" name="upah" placeholder="Upah Pekerja" required>
            <select name="risiko" required>
                <option value="">Pilih Tingkat Risiko</option>
                <option value="0.0024">Sangat Rendah (0,24%)</option>
                <option value="0.0054">Rendah (0,54%)</option>
                <option value="0.0089">Sedang (0,89%)</option>
                <option value="0.0127">Tinggi (1,27%)</op.tion>
                <option value="0.0174">Sangat Tinggi (1,74%)</option>
            </select>
            <button type="submit">Hitung</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <?php
                    if (isset($_POST['upah']) && isset($_POST['risiko'])) {
                        $upah = $_POST['upah'];
                        $persen = $_POST['risiko'];
                        $iuran_jkk = $upah * $persen;

                        echo "<br><h2>Hasil perhitungan:</h2><br>";
                        echo "<p>Iuran JKK: Rp" . number_format($iuran_jkk, 0, ',', '.') . " per bulan</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include("components/footer.php"); ?>