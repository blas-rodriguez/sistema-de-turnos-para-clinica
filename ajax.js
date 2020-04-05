var val1;
var val2;
var val3;
var val4;
var val5;
var val6;
var val7;
var val8;
var val9;
var val10;
var val11;
function load(str)
{
var xmlhttp;
val1=str;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
//alert( str );
//alert( val1 );
xmlhttp.open("POST","proc.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str);
}

function load1(str1)
{
var xmlhttp;
//var combo = documento.getElementById('sele1');
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv1").innerHTML=xmlhttp.responseText;
}
}
//alert( str1 );
//alert( val1 );
//alert( "dni: "+val8+" nombre: "+val7+" dom: "+val6+" tel: "+val5+" os: "+val4+" nro: "+val3 );
xmlhttp.open("POST","proc1.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str1+"&q1="+val1+"&q2="+val2+"&dni="+val8+"&nombre="+val7+"&dom="+val6+"&tel="+val5+"&os="+val4+"&nro="+val3);
//xmlhttp.send("q1="+val1);
//xmlhttp.send("q="+str1, "q1="+val1, "q2="+val2);
}

function load2(str2)
{
val2=str2;
//alert( val1 );
//alert( val2 );
}
function load3(str3)
{
val3=str3;
//alert( val1 );
//alert( val3 );
}
function load4(str4)
{
val4=str4;
var elemento11 = document.getElementById("cont2");
if(val4=="pami"){
//alert( val4 );
   if(elemento11.style.display = 'none')
     {elemento11.style.display = ' inline';}
}
else
{
}
}
function load5(str5)
{
val5=str5;
}
function load6(str6)
{
val6=str6;
}
function load7(str7)
{
val7=str7;
}
function load8(str8)
{
val8=str8;
}
///////////////////////////////////////////////////////////////////
function load22(str9)
{
var xmlhttp;
val10=str9;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
//alert( str );
//alert( val1 );
xmlhttp.open("POST","proc.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str9);
}
///////////////////////////////////////////////////////////////////
function load23(str10)
{
var xmlhttp;
val11=str10;
//window.location.href = "turnosxmes1.php?es="+str10+"&me="+val0;	
alert( val11 );
}
function load11(str1)
{
var xmlhttp;
//var combo = documento.getElementById('sele1');
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv1").innerHTML=xmlhttp.responseText;
}
}
//alert( str1 );
//alert( val1 );
//alert( "dni: "+val8+" nombre: "+val7+" dom: "+val6+" tel: "+val5+" os: "+val4+" nro: "+val3 );
xmlhttp.open("POST","proc3.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str1+"&q1="+val1+"&q2="+val2+"&dni="+val8+"&nombre="+val7+"&dom="+val6+"&tel="+val5+"&os="+val4+"&nro="+val3);
//xmlhttp.send("q1="+val1);
//xmlhttp.send("q="+str1, "q1="+val1, "q2="+val2);
}