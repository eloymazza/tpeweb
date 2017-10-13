<?php
/* Smarty version 3.1.30, created on 2017-10-13 02:14:36
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\setupForm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e0056cea53a6_57541899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5504ffe2ea48103ed8f79f03355e95045b68081' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\setupForm.tpl',
      1 => 1507845350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_59e0056cea53a6_57541899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
<?php }
}
