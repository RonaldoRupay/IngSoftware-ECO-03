<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/tab.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Directorio de Postulantes</title>
    </head>
    <body>
        <from>
            <center>
            <table border="5" width="50%">
                <br>
                <h1>Directorio de Postulantes</h1>
                <br>
               <?php
               include_once '../Model/Conexion.php';
               $obj=new Conexion();
               ?>
                <tr><th>DNI_postulante<th>Nombre<th>Apellido<th>Email<th>Fecha_Nacimiento
               <?php
                        foreach ($obj->LisPos() as $k=>$d){
                              echo "<tr><td>$d[0]<td>$d[1]<td>$d[2]<td>$d[3]<td>$d[5]";
                    ?>
                    <?php
                        }
                    ?>
            </table>
            </center>
    </from>
    
    </body>
</html>
