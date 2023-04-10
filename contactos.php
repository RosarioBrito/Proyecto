<?php require_once('Connections/contenidos.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO conect (`NOMBRE Y APELLIDO`, DIRECCION, CORREO, RECOMENDACIONES) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['NOMBRE_Y_APELLIDO'], "text"),
                       GetSQLValueString($_POST['DIRECCION'], "text"),
                       GetSQLValueString($_POST['CORREO'], "text"),
                       GetSQLValueString($_POST['RECOMENDACIONES'], "text"));

  mysql_select_db($database_contenidos, $contenidos);
  $Result1 = mysql_query($insertSQL, $contenidos) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body {
	background-image: url();
	background-color: #F99;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body><center>
<p><img src="https://wakyma.com/wakymavets/blog/wp-content/uploads/2017/08/7-Consejos-para-mejorar-el-rendimiento-de-ventas-de-tu-Cli%CC%81nica-Veterinaria.jpg" width="1251" height="255" /></p>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">contacto</a>
    <ul>
      <li><a href="inicio.html"><em>inicio</em></a></li>
      <li><a href="index.html"><em>menu</em></a></li>
      <li><a href="PRODUCTOS.html"><em>precios</em></a></li>
      <li><a href="FORMULARIO.html"><em>formulario</em></a></li>
<li><a href="OFRECEMOS.html"><em>ofrecemos</em></a></li>
    </ul>
  </li>
</ul>
<p>&nbsp;</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NOMBRE Y APELLIDO:</td>
      <td><input type="text" name="NOMBRE_Y_APELLIDO" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">DIRECCION:</td>
      <td><input type="text" name="DIRECCION" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CORREO:</td>
      <td><input type="text" name="CORREO" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">RECOMENDACIONES:</td>
      <td><input type="text" name="RECOMENDACIONES" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Insertar registro" /></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="MM_insert" value="form1" />
  </p>
</form>
<table width="1355" border="1">
  <tr>
    <td bgcolor="#FF99CC"><em><strong><a href="index1.html">MENU</a></strong></em></td>
    <td bgcolor="#FF99CC"><em><strong><a href="inicio.html">INICIO</a></strong></em></td>
    <td bgcolor="#FF99CC"><strong><em><a href="PRODUCTOS.html">PRECIOS</a></em></strong></td>
    <td bgcolor="#FF99CC"><em><strong><a href="contactos.php">CONTACTOS</a></strong></em></td>
    <td bgcolor="#FF99CC"><em><strong><a href="FORMULARIO.php">FORMULARIO</a></strong></em></td>
    <td bgcolor="#FF99CC"><a href="OFRECEMOS.html"><strong><em>OFRECEMOS</em></strong></a></td>
  </tr>
</table>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>