<html>
<head>
  <title>hola</title>
</head>

<body>
<?PHP
error_reporting (E_ALL ^ E_DEPRECATED);
 $user_name="root";
 $password= "";
 $database="agenda";
 $server="localhost";
 $db_handle=mysql_connect($server,$user_name,$password);
 $db_found=mysql_select_db($database,$db_handle);

if ($db_found){
$SQL="SELECT * FROM unas";
$result=mysql_query($SQL);
?>

<table border= 1 Cellspacing =1 Cellpadding=1>
<tr><td>&nbsp;Cliente</td><td>&nbsp;Horario</td><td>&nbsp;Fecha</td><td>&nbsp;Diseño</td><td>&nbsp;Imagen</td></tr>

  

<?PHP
while ($db_field=mysql_fetch_assoc($result)){
 printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td><img src=%s width=70 height=70></td></tr>",$db_field["Cliente"],$db_field["Horario"],$db_field["Fecha"],$db_field["Diseño"],$db_field["Imagen"]);
}
mysql_close($db_handle);
} 
else {
print "Database no encontrada";
mysql_close($db_handle);
}
?>
</table>
</body>
</html>      