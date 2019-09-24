<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Enkripsi_Nalendra</title>
<style type="text/css">

<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style></head>
<div class="navbar2">
<body>
<center>
<p><strong>ENKRIPSI</strong></p>
<form action="aksi_enkripsi.php" method="post" enctype="multipart/form-data" name="en" id="en">
  <p>Masukkan Plain Text :<br />
    <textarea name="text" cols="23" rows="3" id="text"></textarea>
</p>
  <p>Masukkan Kunci :<br />
    <input name="key" type="text" id="key" size="40" />
  </p>
  <p>
    <input type="submit" name="Submit" value="Enkripsi Plain Text" />
    <input name="Hapus" type="reset" id="Hapus" value="Hapus" />
  </p>
</form>
<p>&nbsp; </p>
</center>
</div>
</body>
</html>
