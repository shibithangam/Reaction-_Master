<?php
error_reporting(0);
?>
<style type="text/css">
<!--
body {
    margin-left: 0px;
    margin-top: 0px;
}
-->
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="C:\Users\kavya\OneDrive\Desktop\chemistry.jpg">
<tr>
<td width="90%" valign="top">
<!--You can modify the text, color, size, number of loops and more on the flash header by editing the text file (fence.txt) included in the zip file.-->
<div align="left"><object 
codebase=C:\Users\kavya\OneDrive\Desktop\chemistry.jpg
width=500
height=68>
<param name=movie value=image/fence.swf>
<param name=quality value=high>
<param name=BGCOLOR value=#000000>
<param name=SCALE value=showall>
<param name=wmode value=transparent>
<embed src=image/fence.swf
quality=high
pluginspage=C:\Users\kavya\OneDrive\Desktop\chemistry.jpg
width=500
height=68
bgcolor=#000000
scale= showall>
</embed>
</object></div></td>
<td width="10%">
<img border="0" src="image/topright.jpg" width="203" height="68" align="right"></td>
</tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" background="img/blackbar.jpg">
<tr>
<td width="100%" align="right"><img border="0" src="image/blackbar.jpg" width="89" height="15"></td>
</tr>
</Table>
<Table width="100%">
<tr>
<td>
<?php @$_SESSION['login'];
error_reporting(1);
?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
