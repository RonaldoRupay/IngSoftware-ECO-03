<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Empleador</title>
    <link href="../css/master.css" rel="stylesheet" type="text/css"/>
    <link href="../css/folder/estilos-inicio.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
      <form action="../controlador/C_LoginE.php" action="../controlador/C_ListE.php" method="POST" > 
        <div class="login-box">
            <img class="avatar"src="../img/perfil-empleador.jpg" alt=""/>
            <h1>Iniciar Sesión Empleador</h1>
            <!---USERNAME--->
            <label for="username">Usuario</label>
            <input type ="text" placeholder ="Ingrese Usuario" name="Login" type="text">
            <!--Password-->
            <label for="username">Contraseña</label>
            <input placeholder="Ingrese Contraseña" name="Password" type="Password" type="password">
            <input type ="submit" value="INICIAR SESION" name ='submit'>
        </div>
      </form>
  </body>
</html>

