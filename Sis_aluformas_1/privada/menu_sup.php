<?php
session_start(); // abrir la sesion

require_once("../smarty/Smarty.class.php");
require_once("../conexion.php");
$smarty = new Smarty;

if(isset($_SESSION["sesion_id_usuario"])){
	$sesion = array("id_usuario" => $_SESSION["sesion_id_usuario"],
					"usuario" => $_SESSION["sesion_usuario"],
					"id_rol" =>  $_SESSION["sesion_id_rol"],
					"rol" => $_SESSION["sesion_rol"],
					);
	$login = "NO";
}else{
	$sesion = array ("id_usuario" => "-",
					  "usuario" => "-",
					  "id_rol" => "-",
					  "rol" => "-",
					  );
	$login = "SI";
}

$smarty->assign("sesion",$sesion);
$smarty->assign("login",$login);
$smarty->assign("direc_css",$direc_css);
$smarty->display("menu_sup.tpl");
?>
