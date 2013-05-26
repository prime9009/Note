<?php
$name=$_REQUEST['name'];
echo "name=$name <br>"; //imya
$tel=$_REQUEST['tel'];
echo "tel=$tel <br>"; //telephone
$adres=$_REQUEST['adres'];
echo "adres=$adres <br>"; //telephone
$Horoda=$_REQUEST['Horoda'];
echo "Horoda=$Horoda <br>"; //misto
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>"; //kilkist
$note=$_REQUEST['note'];
echo "note=$note <br>"; //typ note
$result=$_REQUEST['result'];
echo "result=$result <br>"; // text rozrahunka
$fp=fopen("zakaz.txt","a");
fputs($fp,"$name\t$tel\t$adres\t$Horoda\t$kilkist\t$result\t");
fclose($fp);
?>
