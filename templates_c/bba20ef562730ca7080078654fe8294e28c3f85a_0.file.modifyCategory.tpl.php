<?php
/* Smarty version 3.1.30, created on 2017-10-12 07:28:05
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\modifyCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59defd65bd7a87_98192729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba20ef562730ca7080078654fe8294e28c3f85a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\modifyCategory.tpl',
      1 => 1507785988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59defd65bd7a87_98192729 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="modifyCategory" method="post">
    <label>Elegir Categoria</label>
    <select name='nombre-categoria'>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
          <option><?php echo $_smarty_tpl->tpl_vars['category']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <div>
      <input type="text" class="pl-1" name='nuevo-nombre' placeholder="Nombre Nuevo">
    </div>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
<?php }
}
