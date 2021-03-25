<?php
// kondisi jika setelah halaman dimuat ulang
if (isset($variable_cookies)) {
    // jika terdapat cookies maka
    echo 'Variable Cookiesnya "$variable_cookies" nilainya adalah' .
        $variable_cookies;
    // jika tidak terdapat cookies maka
} else {
    echo "Variable cookies belum diterapkan";
}
