<?php
/* Smarty version 3.1.30, created on 2017-10-12 17:27:06
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\modifyProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df89ca1c1693_13629013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caa16e05b323f37850c3f642f07a94c58bfef60f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\modifyProduct.tpl',
      1 => 1507822020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df89ca1c1693_13629013 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10 push-1 mt-2 mb-2">
  <form action = "modifyProduct" method="post">
    <div class="form-group">
      <label for="category-name">Elegir Producto:</label>
      <div class="form-group">
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
      </div>
      <label for="category-name">Nuevo nombre:</label>
      <input type="text" class="form-control" id="category-name" name='nombre' placeholder="Nombre Nuevo">
      <label for="category-name">Descripcion:</label>
      <textarea name="descripcion" rows="8" cols="28"></textarea>
      <label for="category-name">Precio:</label>
      <input type="text" class="form-control" id="category-name"  name='precio' placeholder="$$$">
      <label for="category-name">Descuento?</label>
      <input type="text" class="form-control" value=0 id="category-name" name = 'descuento' placeholder="Aplique el descuento si este posee.">
      <div class="form-group">
        <label>Categoria:</label>
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
    </div>
    <button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
<?php }
}
