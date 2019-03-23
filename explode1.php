<?php

$data_awal="data 1 data2 data3 data4 data5";
$pisah=explode(" ",$data_awal);
echo "Data Asli :<br> $data_awal<hr><b> dipisah dengan pola spasi</b>";
echo "Potongan 1 : ".$pisah[0]."<br>";
echo "Potongan 2 : ".$pisah[1]."<br>";
echo "Potongan 3 : ".$pisah[2]."<br>";
echo "Potongan 4 : ".$pisah[3]."<br>";
echo "Potongan 5 : ".$pisah[4]."<br>";

?>