<?php

//CONTOH 1

$arraykata = array("Ayo", "Kerja", "Keras", "dan",
"Kerja", "Cerdas");
$kalimatarray = implode(" ", $arraykata);
echo $kalimatarray;

//CONTOH 2
$tanggal = array("26", "September", "1990");
$tanggalarray = implode("-",$tanggal);
echo $tanggalarray;

//CONTOH 3
echo "<h2>Warung Tegal</h2>";
echo "<br/>";
 
$kalimat = "Menu makan hari ini apa";
 
// memisahkan string menjadi array
$data = explode(" " , $kalimat);
 
// string menjadi array
print_r($data);
//print_r berguna untuk menampilkan isi array
 
echo "<br/>";
echo "<br/>";
 
echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];
 
echo "<br/>";
echo "<br/>";
echo "<h3>Menggabungkan string dengan implode</h3>";
echo "<br/>";
 
// menggabungkan string kembali dengan fungsi implode()
echo implode(" ",$data);

//CONTOH 4

$arr=array ('Mau','makan','apa','ya?');
echo implode(" ",$arr);

echo "<hr>";

$arr_kata = array("mie ayam", "soto", "bakso", "gudeg", "capcay");
$kalimat = implode(" ",$arr_kata);
echo $kalimat;
// satu dua tiga empat lima

//CONTOH 5

$tanggal = array("26", "September", "1990");
$tanggalarray = implode("-",$tanggal);
echo $tanggalarray;

?>