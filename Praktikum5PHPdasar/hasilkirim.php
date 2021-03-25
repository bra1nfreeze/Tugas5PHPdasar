<?php
// kondisi if else, jika kondisi inputan kosong
if (empty($_POST['nama'])) {
    // mengarah ke lokasi file
    header("Location:kosong.php");
} else {
    // mencetak data didalam body tanpa menampilkan secara langsung dalam URL
    echo "<center> Nama : " . $_POST['nama'] . "</center><br>";
}
