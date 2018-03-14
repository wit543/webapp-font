<?php
$old_font_name = $_COOKIE["font name"]
$old_font_size = $_COOKIE["font size"]
setcookie("font name",  $_POST["font name"], time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("font size",  $_POST["font size"], time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "<div><font face=\'".$old_font_name."\' size=".$old_font_size.">".$old_font_name."</font></div><br>"
    echo "<div><font face=\'".$old_font_name."\' size=".$old_font_size.">".$old_font_size."</font></div><br>"
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<form action="http://128.199.88.139:34555">
  your font type :<br>
  <input type="text" name="font name" value="helvetica">
  <br>
  your font size:<br>
  <input type="text" name="font size" value="12">
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>