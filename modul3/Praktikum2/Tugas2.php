<?php
function cetakBilangan($br) {
    for ($i = 1; $i <= $br; $i++) {
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "PemrogramanWebsite 2024\br";
        } elseif ($i % 5 == 0) {
            echo "2024\br";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman\br";
        } elseif ($i % 6 == 0) {
            echo "Website\br";
        } else {
            echo "$i\br";
        }
    }
}

// Contoh pemanggilan fungsi
cetakBilangan(20);
?>