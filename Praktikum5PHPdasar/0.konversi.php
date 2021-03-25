<html>

<head>
    <title>Konversi Tipe</title>
</head>

<body>
    <?php
    $a = 300.4; /* $a adalah integer */
    echo $a; /* cetak var $a (300.4)*/
    echo "<br>"; /* cetak jarak enter */
    echo "tipe Double : ", doubleval($a), "<br>"; /* cetak $a bertipe data float/double (300.4)*/
    echo "tipe Integer : ", intval($a), "<br>"; /* cetak $a bertipe data integer (300)*/
    echo "tipe String : ", strval($a); /* cetak $a bertipe data string (300.4)*/
    ?>
</body>

</html>