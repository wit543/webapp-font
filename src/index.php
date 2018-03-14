<?php
$old_font_name = $_COOKIE["font-name"];
$old_font_size = $_COOKIE["font-size"];
setcookie("font-name",  $_GET["font-name"], time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("font-size",  $_GET["font-size"], time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
// echo $_COOKIE["font-size"];
// echo $old_font_size;
// echo $_GET["font-size"];
echo "<div><font face=\'".$old_font_name."\' size=".$old_font_size.">"."previous font type : ".$old_font_name."</font></div><br>";
echo "<div><font face=\'".$old_font_name."\' size=".$old_font_size.">"."provious font size :".$old_font_size."</font></div><br>";
echo "<div><font face=\'".$_GET["font-name"]."\' size=".$_GET["font-size"].">"."current font type : ".$_GET["font-name"]."</font></div><br>";
echo "<div><font face=\'".$_GET["font-name"]."\' size=".$_GET["font-size"].">"."current font size :".$_GET["font-size"]."</font></div><br>";
?>
<form action="/" method="get">
  your font type :<br>
  <input type="text" name="font-name" value="helvetica">
  <br>
  your font size:<br>
  <input type="text" name="font-size" value="12">
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>