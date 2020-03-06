<?php
  require_once("adodb/adodb.inc.php");

  $direc_css = "../css/colores.css";
  /////////VARIABLES PARA LA CONXION CON EL SERVIDOR////////////
  $conServidor = "localhost";
  $conUsuario = "root";
  $conClave = "";
  $conBasededatos = "bd_aluformas";
  //////////////////////////////////////////////////////////////

  $db = ADONewConnection("mysqli");
  //$db-> debug = true;
  $conex = $db->Connect($conServidor, $conUsuario, $conClave, $conBasededatos);
  $db->Execute("SET NAMES 'utf8'");

 ?>
