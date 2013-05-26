<?php
header('Content-type: text/html; charset=utf-8');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>



<H1>
<center>
Добро пожаловать на страничку заказа интернет магазина "TestRozetka.ck.ua"
</center>
</H1>

<form name=myform action="notes.php">

</head>
<body>
<?php
<body background="seryy-fon.jpg">

Введите ФИО:
<input type="text" name = "name" size="50" /><br /><br />


<p>
<center><b>Выберите фирму желаемого ноутбука:</b> </center>
</p>
<p>

<table>
<tr>
    <td>
	<input  type="radio" name="Firma" value="1" checked><b>Asus <U>Цены: <br> от 17364 до 21435</U></b>
	</td>
    <td>
	<img src="asus.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="ASUS Corporation">
	<img src="asus/asus1.jpg" align="left" width="220" height="150">
	<img src="asus/asus2.jpg" align="left" width="220" height="150">
	<img src="asus/asus3.jpg" align="left" width="220" height="150">
	<img src="asus/asus4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

<table>
<tr>
    <td>
	<input  type="radio" name=" Firma" value="1" checked><b>Acer <U>Цены: <br> от 15678 до 19315</U></b>
	</td>
    <td>
	<img src="acer.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="ACER Corporation">
	<img src="acer/acer1.jpg" align="left" width="220" height="150">
	<img src="acer/acer2.jpg" align="left" width="220" height="150">
	<img src="acer/acer3.jpg" align="left" width="220" height="150">
	<img src="acer/acer4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

<table>
<tr>
    <td>
	<input  type="radio" name=" Firma" value="1" checked><b>Samsung <U>Цены: <br> от 22312 до 29999</U></b>
	</td>
    <td>
	<img src="samsung.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="SAMSUNG Corporation">
	<img src="samsung/s1.jpg" align="left" width="220" height="150">
	<img src="samsung/s2.jpg" align="left" width="220" height="150">
	<img src="samsung/s3.jpg" align="left" width="220" height="150">
	<img src="samsung/s4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

<table>
<tr>
    <td>
	<input  type="radio" name=" Firma" value="1" checked><b>HP <U>Цены: <br> от 18411 до 21312</U></b>
	</td>
    <td>
	<img src="hp.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="HP Corporation">
	<img src="hp/hp1.jpg" align="left" width="220" height="150">
	<img src="hp/hp2.jpg" align="left" width="220" height="150">
	<img src="hp/hp3.jpg" align="left" width="220" height="150">
	<img src="hp/hp4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

<table>
<tr>
    <td>
	<input  type="radio" name=" Firma" value="1" checked><b>Sony <U>Цены: <br> от 17482 до 23879</U></b>
	</td>
    <td>
	<img src="sony.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="Sony Corporation">
	<img src="sony/so1.jpg" align="left" width="220" height="150">
	<img src="sony/so2.jpg" align="left" width="220" height="150">
	<img src="sony/so3.jpg" align="left" width="220" height="150">
	<img src="sony/so4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

<table>
<tr>
    <td>
	<input  type="radio" name=" Firma" value="1" checked><b>Apple <U>Цены: <br> от 30212 до 39218</U></b>
	</td>
    <td>
	<img src="apple.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="Apple Corporation">
	<img src="apple/apple1.jpg" align="left" width="220" height="150">
	<img src="apple/apple2.jpg" align="left" width="220" height="150">
	<img src="apple/apple3.jpg" align="left" width="220" height="150">
	<img src="apple/apple4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

<table>
<tr>
    <td>
	<input  type="radio" name=" Firma" value="1" checked><b>DELL <U>Цены:<br> от 14337 до 16257</U></b>
	</td>
    <td>
	<img src="dell.jpg" align="left" width="220" height="150" hspace="45" style="float: left; margin-right: 5px; margin-bottom: 0px;" alt="DELL Corporation">
	<img src="dell/dell1.jpg" align="left" width="220" height="150">
	<img src="dell/dell2.jpg" align="left" width="220" height="150">
	<img src="dell/dell3.jpg" align="left" width="220" height="150">
	<img src="dell/dell4.jpg" align="left" width="220" height="150">
	</td>
	</tr>
</table>

</p>
<p>
<U><b>Диагональ дисплея:</b> </U>
 </p>
<p>
<input  type="radio" name="ScreenSize" value="1" checked><b>15 Asus <U>(17364)</U>; Acer <U>(15678)</U>; Samsung <U>(22312)</U>; HP <U>(18411)</U>; Sony<U>(17482)</U>; Apple <U>(30212)</U>; DELL <U>(14337)</U>;</b><br>
<input  type="radio" name="ScreenSize" value="1" checked><b>16 Asus <U>(17671)</U>; Acer <U>(16745)</U>; Samsung <U>(23674)</U>; HP <U>(18719)</U>; Sony<U>(18620)</U>; Apple <U>(30874)</U>; DELL <U>(14687)</U>;</b><br>
<input  type="radio" name="ScreenSize" value="1" checked><b>17 Asus <U>(18235)</U>; Acer <U>(17104)</U>; Samsung <U>(24536)</U>; HP <U>(19543)</U>; Sony<U>(19540)</U>; Apple <U>(32015)</U>; DELL <U>(15006)</U>;</b><br>
<input  type="radio" name="ScreenSize" value="1" checked><b>18 Asus <U>(18843)</U>; Acer <U>(17721)</U>; Samsung <U>(25123)</U>; HP <U>(19984)</U>; Sony<U>(20530)</U>; Apple <U>(33817)</U>; DELL <U>(15218)</U>;</b><br>
<input  type="radio" name="ScreenSize" value="1" checked><b>19 Asus <U>(19279)</U>; Acer <U>(18236)</U>; Samsung <U>(26555)</U>; HP <U>(20090)</U>; Sony<U>(21463)</U>; Apple <U>(35515)</U>; DELL <U>(15612)</U>;</b><br>
<input  type="radio" name="ScreenSize" value="1" checked><b>20 Asus <U>(20023)</U>; Acer <U>(18987)</U>; Samsung <U>(28100)</U>; HP <U>(20672)</U>; Sony<U>(22365)</U>; Apple <U>(37756)</U>; DELL <U>(16019)</U>;</b><br>
<input  type="radio" name="ScreenSize" value="1" checked><b>21 Asus <U>(21435)</U>; Acer <U>(19315)</U>; Samsung <U>(29999)</U>; HP <U>(21312)</U>; Sony<U>(23879)</U>; Apple <U>(39218)</U>; DELL <U>(16257)</U>.</b><br>
</p>

<p>
<U><b>Выберите желаемый цвет ноутбука:</b></U>
</p>

<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Черный<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Белый<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Металик<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Красный<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Желтый<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Фиолетовый<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Зеленый<br>
<input type="radio" value="1" id="chek1" onclick="checkCheck(this)" name="colour" />Синий<br>




<br />Введите контактный телефон:<br />
<input type="text" name = "tel" size="50" /><br /><br />


Выберите город:
<select name="Horoda">
<option selected value="Kyiv">Киев</option>
<option value="Lvov">Львов</option>
<option value="Harkov">Харьков</option>
<option value="Shutomur">Житомир</option>
<option value="Sumy">Сумы</option>
<option value="Cherkassy">Черкассы</option>
<option value="Odessa">Одесса</option>
<option value="Chernigov">Чернигов</option>
<option value="Poltava">Полтава</option>
<option value="Kirovograd">Кировоград</option>
<option value="Krivoi Rog">Кривой Рог</option>
<option value="Yalta">Ялта</option>
<option value="Kherson">Херсон</option>
<select>
<br><br />

Введите адресс доставки<br />
<input type="text" name = "adres" size="50" /><br /><br />



<p> 
<b> 
<I>Оплата проводиться иссключительно при получении товара!!!
С Уважением администрация!</b><br /><br />
</I>
<br>

<script>

function touch()
{
alert();
}

function calculate()
{

document.forms[0].tsina.value;
var tsina=parseFloat(document.myform.tsina.value);
var kilkist=parseFloat(document.myform.kilkist.value);

document.myform.result.value=document.myform.result.value+"\n"+"Общая сумма получается вот такая ="+(tsina*kilkist+300);

if (document.myform.check1.checked)
alert();
else
alert();

}
</script>
</head>
<body>
<form name=myform>
<label>
Выберите Ваш товар: 

</label>


<select name="tsina" size="1">
<option value="17364" selected> Asus(15) 17364  </option>
<option value="17671"> Asus(16) 17671 </option>
<option value="18235" > Asus(17) 18235 </option>
<option value="18843" > Asus(18) 18843 </option>
<option value="19279" > Asus(19) 19279 </option>
<option value="20023" > Asus(20) 20023 </option>
<option value="21435" > Asus(21) 21435 </option>
<option value="15678" > Acer(15) 15678 </option>
<option value="16745" > Acer(16) 16745 </option>
<option value="17104" > Acer(17) 17104 </option>
<option value="17721" > Acer(18) 17721 </option>
<option value="18236" > Acer(19) 18236 </option>
<option value="18987" > Acer(20) 18987 </option>
<option value="19315" > Acer(21) 19315 </option>
<option value="30212" > Apple(15) 30212 </option>
<option value="30874" > Apple(16) 30874 </option>
<option value="32015" > Apple(17) 32015 </option>
<option value="33817" > Apple(18) 33817 </option>
<option value="35515" > Apple(19) 35515 </option>
<option value="37756" > Apple(20) 37756 </option>
<option value="39218" > Apple(21) 39218 </option>
<option value="18411" > HP(15) 18411 </option>
<option value="18719" > HP(16) 18719 </option>
<option value="19543" > HP(17) 19543 </option>
<option value="19984" > HP(18) 19984 </option>
<option value="20090" > HP(19) 20090 </option>
<option value="20672" > HP(20) 20672 </option>
<option value="21312" > HP(21) 21312 </option>
<option value="14337" > DELL(15) 14337 </option>
<option value="14687" > DELL(16) 14687 </option>
<option value="15006" > DELL(17) 15006 </option>
<option value="15218" > DELL(18) 15218 </option>
<option value="15612" > DELL(19) 15612 </option>
<option value="16019" > DELL(20) 16019 </option>
<option value="16257" > DELL(21) 16257 </option>
<option value="22312" > Samsung(15) 22312 </option>
<option value="23674" > Samsung(16) 23674 </option>
<option value="24536" > Samsung(17) 24536 </option>
<option value="25123" > Samsung(18) 25123 </option>
<option value="26555" > Samsung(19) 26555 </option>
<option value="28100" > Samsung(20) 28100 </option>
<option value="29999" > Samsung(21) 29999 </option>
<option value="17482" > Sony(15) 17482 </option>
<option value="18620" > Sony(16) 18620 </option>
<option value="19540" > Sony(17) 19540 </option>
<option value="20530" > Sony(18) 20530 </option>
<option value="21463" > Sony(19) 21463 </option>
<option value="22365" > Sony(20) 22365 </option>
<option value="23879" > Sony(21) 23879 </option>

</select>
</p> 







</label>

<label>

Введите количество выбранных Вами товаров (НЕ больше десяти): <input onkeydown = "javascript: return ((event.keyCode>47)&&(event.keyCode<58))" type='text' onkeyup='if(!(this.value>=1&&this.value<=10))this.value="";' name=kilkist><br>
</label>
<p> 
</p>
 
<input type=button value="Давайте посчитаем общую сумму покупки!!!" onClick="calculate();"><br>
<textarea cols="33" rows="4"name=result>
</textarea>

<p>
<I>В общую сумму включена стоимость доставки в размере 300р.
Если все данные верны, жмите кнопку <U>"Добавить в корзину"</U> что бы продолжить процесс оформления заказа!!!
</I>
</p>

<p>
<input type="submit" value="Добавить в корзину" width="20">
<input type="reset" value="Отмена ">
</p>
</form>
?>
</body>
</html>
