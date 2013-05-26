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
<table border=2>
<tr> <td>name</td><td>telephone</td><td>address</td> <td>Goroda</td> <td>kilkist</td>  </tr>
<?php
$fp=fopen("zakaz.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t%s\t%s\t%s\t%d\t%s\n");
       list($name,$tel,$adresss,$Goroda,$kilkist,$result)=$stroka;
        //$Goroda=fscanf($fp,"%s\t");
        //$kilkist=fscanf($fp,"%d\t");
        //$result=fscanf($fp,"%d\n");
echo "<TR><td>$name</td> <td>$tel</td><td>$adresss</td><td> $Goroda</td> <td>$kilkist</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
