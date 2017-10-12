<?php
/* Smarty version 3.1.30, created on 2017-10-12 21:24:11
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/deleteProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dfc15bc1a056_19492188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43310b9630f8e24bc5db96568d4179cb981a0665' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/deleteProduct.tpl',
      1 => 1507835572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dfc15bc1a056_19492188 (Smarty_Internal_Template $_smarty_tpl) {
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
