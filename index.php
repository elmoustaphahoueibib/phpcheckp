<?php
$str = "helo gomyode";
echo ucwords($str);

$st = "PHP 5";
for ($i = 0; $i < strlen($st); $i++) {
    echo "<p>$st[$i] </p>";
}

$str1 = "PHP"; $str2 = "HTML";
$comp = strnatcmp($str1,$str2);
if($comp < 0){
    echo $str1." ".$str2;
}else {
    echo $str2." ".$str1;
}