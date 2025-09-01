<form method="GET">
    <input type="text" name="jari" placeholder="Masukkan jari-jari"><br>
    <input type="text" name="tinggi" placeholder="Masukkan tinggi"><br>
    <input type="submit" value="Hitung Volume Tabung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['jari']) && isset($_GET['tinggi'])) {
        $jari = $_GET['jari'];
        $tinggi = $_GET['tinggi'];

        if (is_numeric($jari) && is_numeric($tinggi)) {
            $volume = 3.14 * $jari * $jari * $tinggi;
            echo "Jari-jari: " . htmlspecialchars($jari) . "<br>";
            echo "Tinggi: " . htmlspecialchars($tinggi) . "<br>";
            echo "Volume Tabung = " . $volume;
        } else {
            echo "Harap masukkan angka yang valid!";
        }
    }
}
?>