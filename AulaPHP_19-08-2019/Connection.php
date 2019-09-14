<?php 
$Server    = "localhost";
$Username  = "root";
$Password  = "";
$DB        = "db_reustaurante";
$Port      = "3306";
$Connect = mysqli_connect($Server, $Username, $Password, $DB, $Port);

if (!$Connect) {
  
  echo "<scrit> alert(Houve um erro de Conexão com banco de dados)<script>".mysql_connect_errno();

}

?>