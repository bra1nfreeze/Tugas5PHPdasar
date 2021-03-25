<?php
// menyisipkan file inc.php
include "inc.php";
// cetak var angka dari file inc.php
echo $angka; // $angka = 90
echo "<br>";
// syntax if else if berdasarkan hasil nilai 
if ($angka == 100) {
    echo "Memuaskan";
} elseif ($angka < 100 && $angka >= 85) {
    echo "Sangat Baik";
} elseif ($angka < 85 && $angka >= 70) {
    echo "Baik";
} elseif ($angka < 70 && $angka >= 55) {
    echo "Cukup";
} elseif ($angka < 55 && $angka >= 0) {
    echo "Kurang";
}
