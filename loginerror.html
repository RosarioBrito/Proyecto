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
  $insertSQL = sprintf("INSERT INTO usuarios (id_usuario, nombre, APELLIDO, usuario, clave) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id_usuario'], "text"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['APELLIDO'], "text"),
                       GetSQLValueString($_POST['usuario'], "text"),
                       GetSQLValueString($_POST['clave'], "text"));

  mysql_select_db($database_login, $login);
  $Result1 = mysql_query($insertSQL, $login) or die(mysql_error());

  $insertGoTo = "login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body {
	background-image: url(WEB/FONDO1.jpg);
}
</style>
</head>

<body>
<p><img src="WEB/banda.jpg" width="1305" height="251" />
</p>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>
                        <blockquote>
                          <blockquote>
                            <blockquote>
                              <p><strong><em>REGISTRARSE</em></strong>                              </p>
                              <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
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
                                <input type="hidden" name="MM_insert" value="form1" />
                              </form>
                            </blockquote>
                          </blockquote>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
<p>&nbsp;                            </p>
</body>
</html>