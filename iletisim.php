<?php

$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$Email=$_POST['email'];
$cinsiyet=$_POST['cinsiyet'];
$baslik=$_POST['fHeader'];
$konu=$_POST['topic'];
$sehir=$_POST['state'];

echo '<br>İsim: ' . $Fname;
echo '<br>Soyisim: ' . $Lname;
echo '<br>Email Adresi: ' . $Email;
echo '<br>Cinsiyet: ' . $cinsiyet;
echo '<br>Şehir: ' . $sehir;
echo '<br>Başlık: ' . $baslik;
echo '<br>Konu: ' . $konu ;

echo "<br><a href ='index.html'>Ana Menü</a>";
?>