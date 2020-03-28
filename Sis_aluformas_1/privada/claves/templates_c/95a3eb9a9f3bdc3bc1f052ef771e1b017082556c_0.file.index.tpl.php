<?php
/* Smarty version 3.1.29, created on 2020-03-28 14:23:35
  from "C:\wamp64\www\practicasDiseno\Sis_aluformas_1\privada\claves\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e7f5de7c83206_68439264',
  'file_dependency' => 
  array (
    '95a3eb9a9f3bdc3bc1f052ef771e1b017082556c' => 
    array (
      0 => 'C:\\wamp64\\www\\practicasDiseno\\Sis_aluformas_1\\privada\\claves\\templates\\index.tpl',
      1 => 1583382024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7f5de7c83206_68439264 ($_smarty_tpl) {
?>
<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../css/colores.css">
		
			<?php echo '<script'; ?>
 >
				function refrescar(){
				var p = window.parent;
				p.location.href='../';
				}
			<?php echo '</script'; ?>
>
		
	</head>
	<body ONLOAD ="self.setTimeout('refrescar()',5000);">
		<center>
			<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
			<br>
			<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
		</center>
	</body>
</html>
<?php }
}
