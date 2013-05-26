<?php
$name=$_REQUEST['name'];
echo "name=$name <br>"; //imya
$tel=$_REQUEST['tel'];
echo "tel=$tel <br>"; //telephone
$adress=$_REQUEST['adress'];
echo "adress=$adress <br>"; //telephone
$Goroda=$_REQUEST['Goroda'];
echo "Goroda=$Goroda <br>"; //misto
$kilkist=$_REQUEST['kilkist'];
echo "kilkist=$kilkist <br>"; //kilkist
$note=$_REQUEST['note'];
echo "note=$note <br>"; //typ note
$result=$_REQUEST['result'];
echo "result=$result <br>"; // text rozrahunka
$fp=fopen("zam.txt","a");
fputs($fp,"$name\t$tel\t$adress\t$Goroda\t$kilkist\t$result\t");
fclose($fp);
?>
