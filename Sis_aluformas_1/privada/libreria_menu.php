<?php
     if (isset($_SESSION["sesion_id_rol"])) {
          $sql = $db->Prepare("    SELECT ac.*, op.id_opcion, op.orden, op.contenido, gr.id_grupo, gr.grupo, op.opcion
                                   FROM accesos ac, opciones op, grupos gr
                                   WHERE ac.id_rol = '".$_SESSION["sesion_id_rol"]."'
                                   AND ac.id_opcion = op.id_opcion
                                   AND op.id_grupo = gr.id_grupo
                                   AND ac.estado <> 'X'
                                   AND op.estado <> 'X'
                                   AND gr.estado <> 'X'
                                   ORDER BY op.id_grupo, op.orden
                                   ");
     $rs = $db->Execute($sql);

     $sql2 = $db->Prepare("   SELECT ac.*, op.id_opcion, op.orden, op.contenido, gr.id_grupo, gr.grupo, op.opcion
                              FROM accesos ac, opciones op, grupos gr
                              WHERE ac.id_rol = '".$_SESSION["sesion_id_rol"]."'
                              AND ac.id_opcion = op.id_opcion
                              AND op.id_grupo = gr.id_grupo
                              AND ac.estado <> 'X'
                              AND op.estado <> 'X'
                              AND gr.estado <> 'X'
                              ORDER BY op.id_grupo, op.orden
                              ");
     $rs2 = $db->Execute($sql2);

     $nick = $_SESSION["sesion_usuario"];
     }else {
          $rs = "";
          $rs2 = "";
          $nick = "";
     }

     if ($nick != "") {
          echo "    <div id = 'header'>
                    <ul class = 'nav'>";
                    $grup = "";
                    foreach ($rs as $r => $fila) {
                         echo "<li>";
                         if ($grup != $fila["grupo"]) {
                              echo "<a href=''>".$fila["grupo"]."</a>";
                              $grup = $fila["grupo"];
                         }
                         echo "<ul>";
                         foreach ($rs2 as $t => $fila2) {
                              if ($grup == $fila2["grupo"]) {
                                   $dir_php = $_SERVER["PHP_SELF"];
                                   $dir_selfx = explode("/", $_SERVER["PHP_SELF"]);
                                   $dir_self = $dir_selfx[3];
                                   if ($dir_self != "cuerpo.php")
                                        echo "<li><a href='../".$fila2["contenido"]."'>".$fila2["opcion"]."</a></li>";
                                   else
                                        echo "<li><a href='".$fila2["contenido"]."'>".$fila2["opcion"]."</a></li>";
                              }
                         }
                         echo "</ul>";
                         echo "</li>";
                    }

                    if ($dir_self != "cuerpo.php") {
                         echo "<a href = '../claves/'><input type = 'button' name = 'accion' value = 'Cerrar Sesion'></a>";
                    }else {
                         echo "<a href = 'claves/'><input type = 'button' name = 'accion' value = 'Cerrar Sesion'></a>";
                    }
                    echo "</ul>";
                    echo "</div>";
               }


 ?>
