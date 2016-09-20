<?php

$bg_colour;
$txt_colour;
$font;
$heading_txt;
$main_txt;
$err_msg="";
$errors=false;

if(isset($_POST['submit_btn'])){
    if(isset($_POST['bg_colour'])){
	    $bg_colour=$_POST['bg_colour'];
    }
    else{
        $errors=true;
        $err_msg.="<p>You need to choose a background colour</p>";
    }
    if(isset($_POST['txt_colour'])){
	    $txt_colour=$_POST['txt_colour'];
    }
    else{
        $errors=true;
        $err_msg.="<p>You need to choose a text colour</p>";
    }
    if(!empty($bg_colour) && !empty($txt_colour)){
        if($bg_colour===$txt_colour){
            $errors=true;
            $err_msg.="<p>You can't choose the same colour for the text and background</p>";
        }
    }
    $font=$_POST['font'];
	$heading_txt=trim($_POST['heading_txt']);
	$main_txt=trim($_POST['main_txt']);
    if(empty($heading_txt)){
        $errors=true;
        $err_msg.="<p>You need to enter some text for the heading</p>";
    }
    if(empty($main_txt)){
        $errors=true;
        $err_msg.="<p>You need to enter some main text</p>";
    }
}	
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Your customised page</title>
<style>
<?php
if(!$errors){
?>
body{
    color:<?php echo $txt_colour;?>;
    background-color:<?php echo $bg_colour;?>;
    font-family:"<?php echo $font;?>";
}
<?php
}
?>
</style>
</head>
<body>
<?php
if($errors){
    echo $err_msg;
}else{
    echo "<h1>".$heading_txt."</h1>";
    echo "<p>".$main_txt."</p>";
}

?>
</body>
</html>