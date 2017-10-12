<?php
/* Smarty version 3.1.30, created on 2017-10-12 16:27:56
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\filteredProducts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df7becb891c1_67139028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6559e7783f5024c7094bbf5d06531e7bbfbb1ac7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\filteredProducts.tpl',
      1 => 1507789950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df7becb891c1_67139028 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12 ml-3 mb-2  product-shower-separator ">
        <div class="row">
            <div class="col-md-3 ml-4 p-2 category-indicator">
                <span><?php echo $_smarty_tpl->tpl_vars['categoryName']->value;?>
</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 product-shower ">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="product-box m-3 p-2 ">
                <h2>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value["nombre"];?>

                </h2>
                <div>
                    <p><?php echo $_smarty_tpl->tpl_vars['product']->value["descripcion"];?>
</p>
                </div>
                <div>
                    <span>Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value["precio"];?>
$</span>
                </div>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value["descuento"] > 0;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1) {?>
                    <div>
                        <span>Descuento: <?php echo $_smarty_tpl->tpl_vars['product']->value["descuento"];?>
%</span>
                    </div>
                <?php }?>
                <div>
                    <?php $_smarty_tpl->_assignInScope('productCategoryID', $_smarty_tpl->tpl_vars['product']->value["id_categoria"]);
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'] == $_smarty_tpl->tpl_vars['productCategoryID']->value;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2) {?>
                        <span>Categoria: <?php echo $_smarty_tpl->tpl_vars['category']->value['nombre'];?>
</span>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
</div>
<?php }
}
