<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/tab.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Directorio de Empleadores</title>
    </head>
    <body>
    <from>
            <center>
            <table border="5" width="50%">
                <br>
                <h1>Directorio de Empleadores</h1>
                <br>
               <?php
               include_once '../Model/Conexion.php';
               $obj=new Conexion();
               ?>
                <tr><th>Id_empleador<th>Nombre<th>Apellido<th>Email<th>Razon Social<th>RUC<th>Telefono_Empresa<th>Dirección_Empresa<th>Tipo_Industria<th>Cantidad_Emplados<th>Fecha_Creación_Empresa
               <?php
                        foreach ($obj->LisE() as $k=>$d){
                              echo "<tr><td>$d[0]<td>$d[1]<td>$d[2]<td>$d[3]<td>$d[5]<td>$d[6]<td>$d[7]<td>$d[8]<td>$d[9]<td>$d[10]<td>$d[11]";
                    ?>
                    <?php
                        }
                    ?>
            </table>
            </center>
    </from>
    </body>
</html>
