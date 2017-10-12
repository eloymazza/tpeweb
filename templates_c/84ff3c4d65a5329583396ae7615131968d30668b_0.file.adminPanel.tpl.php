<?php
/* Smarty version 3.1.30, created on 2017-10-12 02:16:57
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\adminPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59deb47986f864_64396971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ff3c4d65a5329583396ae7615131968d30668b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\adminPanel.tpl',
      1 => 1507767369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_59deb47986f864_64396971 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="col-md-10 push-1 bg-white p-1 pb-4">
              <div class="row">
                <div class="col-md-12">
                  <label for="">Categorias:</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 push-1">
                  <div>
                    <button class="admin-button m-2">Agregar Categoria</button>
                  </div>
                  <div>
                    <button class="admin-button m-2">Modificar Categoria</button>
                  </div>
                  <div>
                    <button class="admin-button m-2">Eliminar Categoria</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="">Productos:</label>
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
              <button class="admin-button  mt-4 mb-4">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>  
</div> <?php }
}
