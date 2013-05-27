<?php
$name=$_REQUEST['name'];
echo "ФИО=$name <br>"; //imya
$colour=$_REQUEST['colour'];
echo "Цвет=$colour <br>"; //colour
$Firma=$_REQUEST['Firma'];
echo "Фирма=$Firma <br>"; //Firma
$ScreenSize=$_REQUEST['ScreenSize'];
echo "Размер дисплея=$ScreenSize <br>"; //ScreenSize
$tel=$_REQUEST['tel'];
echo "Телефон=$tel <br>"; //telephone
$adress=$_REQUEST['adress'];
echo "Адресс=$adress <br>"; //telephone
$Goroda=$_REQUEST['Goroda'];
echo "Город=$Goroda <br>"; //misto
$kilkist=$_REQUEST['kilkist'];
echo "Количество(штук)=$kilkist <br>"; //kilkist
$result=$_REQUEST['result'];
echo "Результат=$result <br>"; // text rozrahunka
$fp=fopen("zam.txt","a");
fputs($fp,"$name\t$tel\t$adress\t$Firma\t$ScreenSize\t$Goroda\t$colour\t$kilkist\t$result\n");
fclose($fp);
?>






