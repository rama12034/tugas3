<form method="POST">
    <input type="text" name="alas" placeholder="Masukkan alas"><br>
    <input type="text" name="tinggi" placeholder="Masukkan tinggi"><br>
    <input type="submit" value="Hitung Luas Segitiga">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $alas = $_POST['alas'];
     $tinggi = $_POST['tinggi'];
     $luas = 0.5 * $alas * $tinggi;
     echo "Luas Segitiga = " . $luas;
}
?>