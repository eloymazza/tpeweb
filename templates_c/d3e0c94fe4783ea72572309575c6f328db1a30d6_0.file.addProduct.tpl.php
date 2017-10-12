<?php
/* Smarty version 3.1.30, created on 2017-10-12 21:24:11
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/addProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dfc15bbfd4a2_59373528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3e0c94fe4783ea72572309575c6f328db1a30d6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/addProduct.tpl',
      1 => 1507835572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dfc15bbfd4a2_59373528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10 push-1 mt-2 mb-2">
  <form action = "addProduct" method="post">
    <div class="form-group">
      <label for="category-name">Nombre del Producto:</label>
      <input type="text" class="form-control" id="category-name" name='nombre' placeholder="Nombre del producto">
      <label for="category-name">Precio:</label>
      <input type="text" class="form-control" id="category-name"  name='precio' placeholder="$$$">
      <div class="form-group">
        <label>Producto:</label>
        <select name='categoria'>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
              <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
><?php echo $_smarty_tpl->tpl_vars['category']->value['nombre'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
      </div>
      <label for="category-name">Descripcion:</label>
      <textarea name="descripcion" rows="8" cols="28"></textarea>
      <label for="category-name">Descuento?</label>
      <input type="text" class="form-control" value=0 id="category-name" name = 'descuento' placeholder="Aplique el descuento si este posee.">
    </div>
    <button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
<?php }
}
