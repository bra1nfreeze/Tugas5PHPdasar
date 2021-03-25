<?php
// kondisi if else, jika kondisi name'nama' inputan kosong
if (empty($_POST['nama'])) {
    // mengarah ke lokasi file
    header("Location:latihan1kosong.php");
    // kondisi if else, jika kondisi name 'email' inputan kosong
} elseif (empty($_POST['email'])) {
    header("Location:latihan1kosong.php");
    // kondisi if else, jika kondisi name 'jeniskelamin' inputan kosong
} elseif (empty($_POST['jeniskelamin'])) {
    header("Location:latihan1kosong.php");
    // kondisi if else, jika kondisi name'kota' inputan kosong
} elseif (empty($_POST['kota'])) {
    header("Location:latihan1kosong.php");
    // kondisi if else, jika kondisi name'Universitas' inputan kosong
} elseif (empty($_POST['Universitas'])) {
    header("Location:latihan1kosong.php");
    // kondisi if else, jika kondisi name'Jurusan' inputan kosong
} elseif (empty($_POST['Jurusan'])) {
    header("Location:latihan1kosong.php");
} else {
    // menyisipkan file latihan1.php
    include "latihan1.php";
    // mencetak data didalam body yang diinputkan tanpa menampilkan secara langsung dalam URL
    echo "<center>Nama Lengkap : <br>" . $_POST['nama'] . "<center><br>";
    echo "<center>Email : <br>" . $_POST['email'] . "<center><br>";
    echo "<center>Jenis Kelamin : <br>" . $_POST['jeniskelamin'] . "<center><br>";
    echo "<center>Asal Kota : <br>" . $_POST['kota'] . "<center><br>";
    echo "<center>Universitas : <br>" . $_POST['Universitas'] . "<center><br>";
    echo "<center>Jurusan : <br>" . $_POST['Jurusan'] . "<center><br>";
    // menetapkan timezone di Asia/Jakarta
    date_default_timezone_set('Asia/jakarta');
    /* cetak tanggal berdasarkan 
        d= hari dengan nol termuka      g= jam dalam format 12 jam tanpa awal nol
        F= nama bulan penuh             i= menit dengan no di depan
        Y= setahun penuh                s= detik dengan nol di depan
    */
    echo date("d-F-Y, g:i:s a");
}
