<html>

<head>
    <title>Latihan 3</title>
</head>

<body>
    <h1 align="center">Biodata Diri</h1>
    <!-- Penanganan Form TEXTBOX dengan metode POST -->
    <!-- Action Mempresentasikan file dimana data dikirim -->
    <form method="POST" action="latihan1post.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130"> Nama lengkap </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130"> Email </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td width="130"> Jenis Kelamin </td>
                <td>
                    <!--RADIO BUTTON-->
                    <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki - Laki
                    <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td width="130"> Asal Kota </td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td width="130"> Universitas </td>
                <td><input type="text" name="Universitas"></td>
            </tr>
            <tr>
                <td width="130"> Jurusan </td>
                <td><input type="text" name="Jurusan"></td>
            </tr>
            <tr>
                <!--Tombol Button-->
                <td colspan="2"><input type="submit" name="buat" value="buat"> <input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>