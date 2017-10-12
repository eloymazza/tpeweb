<?php
/* Smarty version 3.1.30, created on 2017-10-12 07:58:30
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\adminPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df0486d5bbe1_41726786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ff3c4d65a5329583396ae7615131968d30668b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\adminPanel.tpl',
      1 => 1507787880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:addCategory.tpl' => 1,
    'file:modifyCategory.tpl' => 1,
    'file:deleteCategory.tpl' => 1,
    'file:dependences.tpl' => 1,
  ),
),false)) {
function content_59df0486d5bbe1_41726786 (Smarty_Internal_Template $_smarty_tpl) {
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
                  </div>
                  <div>
                    <button class="admin-button m-2">Modificar Productos</button>
                  </div>
                  <div>
                    <button class="admin-button m-2">Eliminar Productos</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 push-3">
              <button class="admin-button  mt-4 mb-4 borders">Salir</button>
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
