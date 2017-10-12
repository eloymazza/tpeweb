<?php
/* Smarty version 3.1.30, created on 2017-10-12 17:02:23
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\addProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df83ffd47781_06829106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9080c1908a8bf0703aa6cd08ec80b17f0352c5a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\addProduct.tpl',
      1 => 1507820484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df83ffd47781_06829106 (Smarty_Internal_Template $_smarty_tpl) {
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
