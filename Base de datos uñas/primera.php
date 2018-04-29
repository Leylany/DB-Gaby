<html>
<head>
  <title>hola</title>
</head>

<body>
<?PHP
error_reporting (E_ALL ^ E_DEPRECATED);
 $user_name="root";
 $password= "";
 $database="tecmilenio";
 $server="localhost";
 $db_handle=mysql_connect($server,$user_name,$password);
 $db_found=mysql_select_db($database,$db_handle);

if ($db_found){
$SQL="SELECT * FROM alumnos";
$result=mysql_query($SQL);
?>

<table border= 1 Cellspacing =1 Cellpadding=1>
<tr><td>&nbsp;Nombre</td><td>&nbsp;Apellido</td><td>&nbsp;Imagen</td></tr>

  

<?PHP
while ($db_field=mysql_fetch_assoc($result)){
 printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s</td><td><img src=%s width=70 height=70></td></tr>",$db_field["nombre"],$db_field["apellido"],$db_field["imagen"]);
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