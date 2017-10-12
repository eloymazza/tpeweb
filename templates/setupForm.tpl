{include file="head.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Crear Base de Datos</h1>
      <p>Bienvenido al GroceryStore Online!</p>
      <p>A continuación instalaremos el sistema. Por favor complete los datos necesarios para iniciar la instalación</p>
      <form action="install.php" method="post">
        <div class="form-group">
          <label for="host">Host:</label>
          <input type="text" class="form-control" id="host" name='host' placeholder="Host de la base de datos">
        </div>
        <div class="form-group">
          <label for="database">Nombre de la Base de Datos:</label>
          <input type="text" class="form-control" id="database" name='database' placeholder="Nombre de la Base de Datos">
        </div>
        <div class="form-group">
          <label for="username">Usuario:</label>
          <input type="text" class="form-control" id="username" name='username' placeholder="Nombre de usuario">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="text" class="form-control" id="password" name='password' placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Crear Base de Datos</button>
      </form>
    </div>
  </div>
</div>
