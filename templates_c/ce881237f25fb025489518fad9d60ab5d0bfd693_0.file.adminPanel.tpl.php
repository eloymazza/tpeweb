<?php
/* Smarty version 3.1.30, created on 2017-10-12 21:24:11
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/adminPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dfc15bbb27f2_38272429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce881237f25fb025489518fad9d60ab5d0bfd693' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/adminPanel.tpl',
      1 => 1507835572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:addCategory.tpl' => 1,
    'file:modifyCategory.tpl' => 1,
    'file:deleteCategory.tpl' => 1,
    'file:addProduct.tpl' => 1,
    'file:modifyProduct.tpl' => 1,
    'file:deleteProduct.tpl' => 1,
    'file:dependences.tpl' => 1,
  ),
),false)) {
function content_59dfc15bbb27f2_38272429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 push-3 mt-2 p-2 admin-panel">
          <div class="row mb-3">
            <div class="col-md-12">
              <h1>Admin Panel</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 push-1 bg-white p-1 pb-4 borders">
              <div class="row">
                <div class="col-md-12">
                  <h2>Categorias:</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 push-1">
                  <div>
                    <button class="admin-button m-2">Agregar Categoria</button>
                    <div class="row hide">
                      <?php $_smarty_tpl->_subTemplateRender("file:addCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                  </div>
                  <div>
                    <button class="admin-button m-2" >Modificar Categoria</button>
                    <div class="row hide">
                      <?php $_smarty_tpl->_subTemplateRender("file:modifyCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                  </div>
                  <div>
                    <button class="admin-button m-2 " >Eliminar Categoria</button>
                    <div class="row hide">
                      <?php $_smarty_tpl->_subTemplateRender("file:deleteCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h2>Productos:</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 push-1">
                  <div>
                    <button class="admin-button m-2">Agregar Productos</button>
                    <div class="row hide">
                      <?php $_smarty_tpl->_subTemplateRender("file:addProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                  </div>
                  <div>
                    <button class="admin-button m-2">Modificar Productos</button>
                    <div class="row hide">
                      <?php $_smarty_tpl->_subTemplateRender("file:modifyProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                  </div>
                  <div>
                    <button class="admin-button m-2">Eliminar Productos</button>
                    <div class="row hide">
                      <?php $_smarty_tpl->_subTemplateRender("file:deleteProduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 push-3">
              <a href="out"><button class="admin-button  mt-4 mb-4 borders">Salir</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:dependences.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php }
}
