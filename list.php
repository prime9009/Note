<?php
header('Content-type: text/html; charset=utf-8');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Заказ </title>
</head>
<body>
<H1> Заказ ноутбуков </H1>
<table border=10>
<tr> <td>Имя</td><td>Телефон</td><td>Адресс</td> <td>Фирма</td> <td>Город</td> <td>Количество(штук)</td> <td>Цвет</td> <td>Размер дисплея</td> </tr>
<?php
$fp=fopen("zam.txt","r");
if ($fp)
   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t%s\t%s\t%s\t%d\t%s\n");
       list($name,$tel,$firma,$adresss,$Goroda,$kilkist,$Colour,$ScreenSize,$result)=$stroka;
        //$Goroda=fscanf($fp,"%s\t");
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$name</td> <td> $firma</td> <td>$tel</td><td>$adresss</td><td> $Goroda</td> <td>$kilkist</td> <td>$Colour</td> <td>$ScreenSize</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
