<?php
/* Smarty version 3.1.30, created on 2017-10-12 07:58:30
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\deleteCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df0486e08299_20416385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4a4d630e5da5e1f01e13569821151a9c31cb1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\deleteCategory.tpl',
      1 => 1507787878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df0486e08299_20416385 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="deleteCategory" method="post">
    <label>Elegir Categoria</label>
    <select name='id_categoria'>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
<?php }
}
