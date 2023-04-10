<?php require_once('Connections/cn.php'); ?>
<?php require_once('Connections/login.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO `form` (CEDULA, NOMBRE, APELLIDO, `FECHA DE NACIMIENTO`, EDAD, SEXO, TELEFONO, correo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['CEDULA'], "text"),
                       GetSQLValueString($_POST['NOMBRE'], "text"),
                       GetSQLValueString($_POST['APELLIDO'], "text"),
                       GetSQLValueString($_POST['FECHA_DE_NACIMIENTO'], "text"),
                       GetSQLValueString($_POST['EDAD'], "text"),
                       GetSQLValueString($_POST['SEXO'], "text"),
                       GetSQLValueString($_POST['TELEFONO'], "text"),
                       GetSQLValueString($_POST['correo'], "text"));

  mysql_select_db($database_cn, $cn);
  $Result1 = mysql_query($insertSQL, $cn) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form3")) {
  $insertSQL = sprintf("INSERT INTO usuarios (id_usuario, nombre, APELLIDO, usuario, clave) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id_usuario'], "text"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['APELLIDO'], "text"),
                       GetSQLValueString($_POST['usuario'], "text"),
                       GetSQLValueString($_POST['clave'], "text"));

  mysql_select_db($database_login, $login);
  $Result1 = mysql_query($insertSQL, $login) or die(mysql_error());
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
	background-color: #69F;
}
</style>
</head>

<body>
<center>
  <p><img src="https://wakyma.com/wakymavets/blog/wp-content/uploads/2017/08/7-Consejos-para-mejorar-el-rendimiento-de-ventas-de-tu-Cli%CC%81nica-Veterinaria.jpg" width="1144" height="312" /></p>
  <table width="1355" border="1">
    <tr>
      <td bgcolor="#FF99CC"><em><strong><a href="index1.html">MENU</a></strong></em></td>
      <td bgcolor="#FF99CC"><em><strong><a href="inicio.html">INICIO</a></strong></em></td>
      <td bgcolor="#FF99CC"><strong><em><a href="PRODUCTOS.html">PRECIOS</a></em></strong></td>
      <td bgcolor="#FF99CC"><em><strong><a href="CONTACTOS.php">CONTACTOS</a></strong></em></td>
      <td bgcolor="#FF99CC"><em><strong><a href="FORMULARIO.php">FORMULARIO</a></strong></em></td>
      <td bgcolor="#FF99CC"><a href="OFRECEMOS.html"><strong><em>OFRECEMOS</em></strong></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form action="<?php echo $editFormAction; ?>" method="post" name="form3" id="form3">
    <table align="center">
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Id_usuario:</td>
        <td><input type="text" name="id_usuario" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Nombre:</td>
        <td><input type="text" name="nombre" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">APELLIDO:</td>
        <td><input type="text" name="APELLIDO" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Usuario:</td>
        <td><input type="text" name="usuario" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Clave:</td>
        <td><input type="text" name="clave" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Insertar registro" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form3" />
  </form>
  <p>&nbsp;</p>
<form id="form2" name="form2" method="post" action="">
    <table width="100" border="1">
      <tr>
        <td>Usuario:</td>
        <td><label for="usuario"></label>
          <input type="text" name="usuario" id="usuario" /></td>
      </tr>
      <tr>
        <td>Contraseña:</td>
        <td><label for="clave"></label>
          <input type="text" name="clave" id="clave" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Enviar" id="Enviar" value="Enviar" /></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
  <p><img src="https://cdn.shopify.com/s/files/1/0268/6861/files/convivencia-perros-gatos_grande.jpg?v=1540730132" width="511" height="251" /></p>
<p>&nbsp;</p>
</CENTER>
<p>&nbsp;</p>
</body>
</html>