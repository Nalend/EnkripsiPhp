<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Enkripsi</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body>
<?php
require_once('inti.php');
$input = $_POST['text'];
$key = $_POST['key'];
$num = getKey($key);
list($average, $average1) = explode('|', $num, 2);

$step1 =  keKanan($input, $average);
$step2 =  keascii($step1, $average1);
$step3 =  ZEYLOBsdGM5($step2);
?>
<p><strong>ENKRIPSI</strong></p>
  <p><strong>Plain Text :</strong><br />
    	<?php echo $input; ?></p>
  <p><strong>Kunci :</strong><br />
    	<?php echo $key; ?></p>
  <p><strong>Ciper Text :</strong><br />
    	<?php echo $step3; ?></p>
<p>&nbsp; </p>
</body>
</html>
