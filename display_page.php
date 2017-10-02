<?php
$bg_colour = $_POST["bg_colour"];
$txt_colour = $_POST["txt_colour"];
$font = $_POST["font"];
$heading_txt = $_POST["heading_txt"];
$main_txt = $_POST["main_txt"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>This is your page</title>
</head>
<style>
body{
    background-color:<?php echo $bg_colour;?>;
    color:<?php echo $txt_colour;?>;
    font-family:<?php echo $font;?>;
}
</style>
<body>

<?php 
echo "<h1>".$heading_txt."</h1>";
echo "<p>".$main_txt."</p>";
?>
</body>
</html>