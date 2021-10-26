<?php

echo "Masukan Huruf atau Angka: ";
$str = trim(fgets(STDIN));
$str = strtoupper($str);

$strArray = array();
$strArray = str_split($str);

$len = sizeof($strArray);
$reverseStr = array();

for ($i = $len - 1; $i >= 0; $i--) {
    $reverseStr[] .= $strArray[$i];
}
if ($strArray == $reverseStr) {
    echo "$str sebuah palindrome";
} else {
    echo "$str bukan sebuah palindrome";
}
