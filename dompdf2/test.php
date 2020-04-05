<?php

   include "dompdf_config.inc.php";
  
   /*$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title></title>
</head>
<body>
<h1>Line break test</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec at
odio vitae libero tempus convallis. Cum sociis natoque penatibus et
magnis dis parturient montes, nascetur ridiculus mus. Vestibulum purus
mauris, dapibus eu, sagittis quis, sagittis quis, mi. Morbi fringilla
massa quis velit. Curabitur metus massa, semper mollis, molestie vel,<br/>
adipiscing nec, massa. Phasellus vitae felis sed lectus dapibus
facilisis. In ultrices sagittis ipsum. In at est. Integer iaculis
turpis vel magna. Cras eu est. Integer porttitor ligula a
<br/>
<br/>
tellus. Curabitur accumsan ipsum a velit. Sed laoreet lectus quis
leo. Nulla pellentesque molestie ante. Quisque vestibulum est id
justo. Ut pellentesque ante in neque.</p>

<p>Line break at beginning of next paragraph:</p>
<p style="border: 0.5pt solid blue"><br/>
Line 2</p>

<p>Line break within a font tag: 
<font face="trebuchet ms">ABCDE<br/>FGHIJK</font></p>

<p>Line break within two nested spans: <span>span 1 <span>2<br/>break</span></span></p>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec at
odio vitae libero tempus convallis. Cum sociis natoque penatibus et
magnis dis parturient montes, nascetur ridiculus mus. Vestibulum purus
mauris, dapibus eu, sagittis quis, sagittis quis, mi. Morbi fringilla
massa quis velit. Curabitur metus massa, semper mollis, molestie vel,<br/>
adipiscing nec, massa. Phasellus vitae felis sed lectus dapibus
facilisis. In ultrices sagittis ipsum. In at est. Integer iaculis
turpis vel magna. Cras eu est. Integer porttitor ligula a
<br/>
<br/>
tellus. Curabitur accumsan ipsum a velit. Sed laoreet lectus quis
leo. Nulla pellentesque molestie ante. Quisque vestibulum est id
justo. Ut pellentesque ante in neque.</p>

</body>
</html>';*/
   
/*
   $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title></title>
</head>
<body>
<img src="http://chart.apis.google.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World" width="250" height="100" />

Test
</body>
</html>';
*/


   $html ='<html> 
<head> 
 
<style> 
.test { 
background-color:red; 
} 
</style> 
</head> 
<body> 
<table border=1 width="100%"> 
<tr> 
<td align="left">aaa</td> 
<td align="center">aaa</td> 
<td align="right">&nbsp;</td> 
</tr> 
<tr> 
<td align="left">aaa</td> 
<td>&nbsp;</td> 
<td align="right">aaa</td> 
</tr> 
</table> 
 
<table border=1 width="100%"> 
<tr> 
<td rowspan="2" class="test">aaa</td> 
<td colspan="2">aaa</td> 
<td colspan="2">aaa</td> 
<td rowspan="2">aaa<br>(bbb)</td> 
<td rowspan="2">aaa<br>aaa</td> 
<td rowspan="2">aaa<br>aaa</td> 
<td colspan="4">aaa</td> 
</tr> 
<tr> 
<td>aaa</td> 
<td>aaa</td> 
<td>aaa</td> 
<td>aaa<br>aaa</td> 
<td>aaa1</td> 
<td>aaa2</td> 
<td>aaa3</td> 
<td>aaa4</td> 
</tr> 
<tr> 
<td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td> <td>8</td><td>9</td><td>10</td><td>11</td> 
</tr> 
<tr> 
<td colspan="12" align="right">{PAGE_NUM}/{PAGE_COUNT}&nbsp;</td> 
</tr> 
</table> 
</body> 
</html> ';

      
   $dompdf = new DOMPDF();
   $dompdf->load_html($html);
   $dompdf->render();           
   $dompdf->stream("pdf_file.pdf", array("Attachment" => 1)); 
   unset($dompdf); 