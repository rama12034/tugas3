<form method="GET">
    <input type="text" name="alas" placeholder="Masukkan alas"><br>
    <input type="text" name="tinggi" placeholder="Masukkan tinggi"><br>
    <input type="submit" value="Hitung Luas Segitiga">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['alas']) && isset($_GET['tinggi'])) {
        $alas = $_GET['alas'];
        $tinggi = $_GET['tinggi'];

        if (is_numeric($alas) && is_numeric($tinggi)) {
            $luas = 0.5 * $alas * $tinggi;
            echo "Alas: " . htmlspecialchars($alas) . "<br>";
            echo "Tinggi: " . htmlspecialchars($tinggi) . "<br>";
            echo "Luas Segitiga = " . $luas;
        } else {
            echo "Harap masukkan angka yang valid!";
        }
    }
}
?>