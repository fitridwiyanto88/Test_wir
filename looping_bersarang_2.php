<?php
$nilai = 1345679;
$l = strlen($nilai);
$n ="";
for($i=$l;$i>=1;$i--)
{
$letter = substr($nilai, $l-$i,1);
 for($j=2;$j<=$i;$j++)
 $n.="0"; //jumlah nol sesuai dengan nominalnya
echo $letter.$n."<br>"; //gabungkan nilai dengan nol nya
$n = ""; //untuk mereset nilai $n agar jumlah nol sesuai
}
 ?>