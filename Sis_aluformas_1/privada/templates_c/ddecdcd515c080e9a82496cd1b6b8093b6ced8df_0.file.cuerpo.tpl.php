<?php
/* Smarty version 3.1.29, created on 2020-03-05 22:46:02
  from "C:\wamp64\www\Sis_aluformas_1\privada\templates\cuerpo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e61812abb3682_43896288',
  'file_dependency' => 
  array (
    'ddecdcd515c080e9a82496cd1b6b8093b6ced8df' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_aluformas_1\\privada\\templates\\cuerpo.tpl',
      1 => 1583440446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61812abb3682_43896288 ($_smarty_tpl) {
?>
<!DOCTYPE html>
 	<head>
 		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	 </head>
 <body>
 		<form action="claves/" method="post" target="cuerpo">
 		<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
 			<table width="25%" align="center" border="1">
 				<tr>
 					<th align="center" colspan="2">Ingresar al Sistema</th>
 				</tr>
 				<tr>
 					<td><b>Login:</b></td>
 					<td><input type="text" name="nick" size="11" value="" class="limpiar"></td>
 				</tr>
 				<tr>
 					<td><b>Clave:</b></td>
 					<td><input type="password" name="password" size="11" value=""></td>
 				</tr>
 				<tr>
 					<td colspan="2" align="center">
 					<input type="submit" name="accion" value="Ingresar" size="5">
 					</td>
 				</tr>
 			</table>
 			<?php }?>
 		</form>
 	</body>
 </html><?php }
}
