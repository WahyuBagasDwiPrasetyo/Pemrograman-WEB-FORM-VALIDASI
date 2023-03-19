<?php include("components/header.php"); ?>
<?php include("components/menu.php"); ?>

<!-- form -->
<div class="container" id="container">
    <div class="form-container jht-container">
        <form method="post">
            <h2>Menghitung JKM (Jaminan Kematian)</h2>
            <input type="number" name="upah" placeholder="Upah Pekerja" required>
            <button type="submit">Hitung</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <?php
                    if (isset($_POST['upah'])) {
                        $upah = $_POST['upah'];
                        $iuran_jk = $upah * 0.003;

                        echo "<br><h2>Hasil perhitungan:</h2><br>";
                        echo "<p>Iuran JK yang dibayar oleh perusahaan: Rp" . number_format($iuran_jk, 0, ',', '.') . " per bulan</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include("components/footer.php"); ?>