{include file="common_elements/head.tpl"}
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 push-4 mt-2">
          <h1>Crea tu Cuenta Personal</h1>
        </div>
      </div>
    </div>
  </header>
    <div class="container">
        <div class="row">
          <div class="col-md-4 push-4 mt-2">
            <form action="verifyUser" method="post">
              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" name="nombre" placeholder="roberto.petrusa" required>
              </div>
              <div class="form-group">
                <label for="usuario">Direccion de email</label>
                <input type="email" class="form-control" name="email" placeholder="roberto.petrusa@gmail.com" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password" placeholder="Password" required>
              </div>
              {if !empty($error) }
                <div class="alert alert-danger" role="alert">{$error}</div>
              {/if}
              <button type="submit" class="btn btn-primary">Registrarse</button>
              <a href="index" class="btn btn-default">Go Back</a>
            </form>
          </div>
        </div>
    </body>
</div>
