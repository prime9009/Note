<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Заказ </title>
</head>
<body>
<H1> Заказ ноутбуков </H1>
<table border=10>
<tr> <td>Имя</td><td>Телефон</td><td>Адресс</td> <td>Фирма</td> <td>Город</td> <td>Количество(штук)</td> <td>Цвет</td> <td>Размер дисплея</td>  <td>Примечание</td></tr>
<?php
$fp=fopen("zam.txt","r");
if ($fp)
   {
       while(!feof($fp))
    {
   $s1=fgets($fp);
        $tok = strtok($s1, "\t");
        $name=$tok;
        $tok = strtok("\t");
        $tel=$tok;
        $tok = strtok("\t");
        $adresss=$tok;
        $tok = strtok("\t");
        $firma=$tok;
        $tok = strtok("\t");
        $ScreenSize=$tok;
        $tok = strtok("\t");
        $Goroda=$tok;
        $tok = strtok("\t");
        $Colour=$tok;
        $tok = strtok("\t");
        $kilkist=$tok;
        $tok = strtok("\t");
        $result=$tok;

       //echo $s1;
       //$stroka=sscanf($s1,"%s\t%s\t%s\t%s\t%d\t%s\t%s\t%s\t%s");
       //list($name,$tel,$adresss,$firma,$ScreenSize,$Goroda,$Colour,$kilkist,$result)=$stroka;
      
echo "<TR><td>$name</td> <td>$tel</td> <td>$adresss</td> <td> $firma</td> <td> $Goroda</td> <td>$kilkist</td> <td>$Colour</td> <td>$ScreenSize</td> <td>$result</td> </TR>";
}
fclose($fp);
}
?>
</body>
</html>
