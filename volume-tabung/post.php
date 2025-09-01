<form method="POST">
    <input type="text" name="jari" placeholder="Masukkan jari-jari"><br>
    <input type="text" name="tinggi" placeholder="Masukkan tinggi"><br>
    <input type="submit" value="Hitung Volume Tabung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $jari = $_POST['jari'];
     $tinggi = $_POST['tinggi'];
     $volume = 3.14 * $jari * $jari * $tinggi;
     echo "Volume Tabung = " . $volume;
}
?>