<?php
//contoh 1

$data_awal="data1 data2 data3 data4 data5";
$pisah=explode(" ",$data_awal);
echo "Data Asli :<br> $data_awal<hr><b> dipisah dengan pola spasi</b>";
echo "Potongan 1 : ".$pisah[0]."<br>";
echo "Potongan 2 : ".$pisah[1]."<br>";
echo "Potongan 3 : ".$pisah[2]."<br>";
echo "Potongan 4 : ".$pisah[3]."<br>";
echo "Potongan 5 : ".$pisah[4]."<br>";

//contoh 2
$kata = "ayam lele bebek";
$pisah = explode(" ",$kata);
echo $pisah[0].'<br>';
echo $pisah[1].'<br>';
echo $pisah[2].'<br>';

//contoh 3

function contohExplode_satu(){
 
 $tgllahir = '17,Agustus,1945';
 $dipecah  = explode(',', $tgllahir);
 
 foreach ($dipecah as $variabel){
 echo "Kemerdekaan Indonesia : $variabel" .'<br>';
 }
 
 }
 contohExplode_satu();
 
 //contoh 4
 function contohExlopde_dua(){
 
 $kumpulankata = 'hallo.apa.kabar.php';
 $pecah = explode('.', $kumpulankata);
 
 echo "kata pertama : $pecah[0]" .'<br>';
 echo "kata kedua   : $pecah[1]" .'<br>';
 echo "kata ketiga  : $pecah[2]" .'<br>';
 echo "kata keempat : $pecah[3]" .'<br>';
 }
 contohExlopde_dua();
 
 //contoh 5
 
$kalimat = "Ayo Kerja Keras dan Kerja Cerdas";
$arraykalimat = explode(" ", $kalimat);
echo $arraykalimat[5];
?>