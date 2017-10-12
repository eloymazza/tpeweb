<?php
/* Smarty version 3.1.30, created on 2017-10-12 16:47:38
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\deleteProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df808a694a62_59752920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b959978c6f438ed9513075141ef0ba4f8261c29f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\deleteProduct.tpl',
      1 => 1507819656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df808a694a62_59752920 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="deleteProduct" method="post">
    <label>Elegir Producto</label>
    <select name='id_producto'>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_producto'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['nombre'];?>
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
