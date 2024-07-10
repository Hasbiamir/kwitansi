<?php

function terbilang($number) {
    $words = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    if ($number < 12)
        return " " . $words[$number];
    elseif ($number < 20)
        return terbilang($number - 10) . " belas";
    elseif ($number < 100)
        return terbilang($number / 10) . " puluh" . terbilang($number % 10);
    elseif ($number < 200)
        return " seratus" . terbilang($number - 100);
    elseif ($number < 1000)
        return terbilang($number / 100) . " ratus" . terbilang($number % 100);
    elseif ($number < 2000)
        return " seribu" . terbilang($number - 1000);
    elseif ($number < 1000000)
        return terbilang($number / 1000) . " ribu" . terbilang($number % 1000);
    elseif ($number < 1000000000)
        return terbilang($number / 1000000) . " juta" . terbilang($number % 1000000);
    elseif ($number < 1000000000000)
        return terbilang($number / 1000000000) . " milyar" . terbilang(fmod($number, 1000000000));
    elseif ($number < 1000000000000000)
        return terbilang($number / 1000000000000) . " trilyun" . terbilang(fmod($number, 1000000000000));
}
