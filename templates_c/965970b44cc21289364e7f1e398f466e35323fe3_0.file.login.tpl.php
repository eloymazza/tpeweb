<?php
/* Smarty version 3.1.30, created on 2017-10-12 02:00:00
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59deb0807f7ee1_12225852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965970b44cc21289364e7f1e398f466e35323fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\login.tpl',
      1 => 1507765238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_59deb0807f7ee1_12225852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 push-4 mt-2">
          <h1>Login Panel</h1>
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
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password" placeholder="Password" required>
              </div>
              <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
              <?php }?>
              <button type="submit" class="btn btn-default">Login</button>
            </form>
          </div>
        </div> 
    </body>  
</div> <?php }
}
