<?php
require_once("adodb5/adodb.inc.php");

$direc_css = "../css/colores.css";
$conServidor = "localhost";
$conUsuario = "root";
$conClave = "";
$conBasededatos = "bd_aluformas";

$db = ADONewConnection("mysqli");

$conex = $db->Connect($conServidor,$conUsuario, $conClave, $conBasededatos);
$db->Execute("SET NAMES 'utf8'");
?>
