<?php
$nilai = 8764321;
$l = strlen($nilai);
$n ="";
for($i=$l;$i>=1;$i--)
 {
$letter = substr($nilai, $l-$i,8);
 for($j=1;$j<=$i;$j++)
 $n.=""; //jumlah nol sesuai dengan nominalnya
echo $letter.$n."<br>"; //gabungkan nilai dengan nol nya
$n = ""; //untuk mereset nilai $n agar jumlah nol sesuai
 }
?> 