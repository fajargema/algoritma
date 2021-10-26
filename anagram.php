<?php
function is_anagram($a, $b)
{
    return (count_chars($a, 1) == count_chars($b, 1));
}
echo "Masukan Huruf pertama: ";
$teks1 = trim(fgets(STDIN));
echo "Masukan Huruf kedua: ";
$teks2 = trim(fgets(STDIN));

if (is_anagram($teks1, $teks2) == 1) {
    echo "true";
} else {
    echo "false";
}
