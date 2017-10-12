<?php
/* Smarty version 3.1.30, created on 2017-10-12 21:24:11
  from "/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/addCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dfc15bbbd165_97152906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98e0e3d7d5df605c154fdb0bdce60bc8c00cad87' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/trabajoEspecial/merge/tpeweb/templates/addCategory.tpl',
      1 => 1507835572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59dfc15bbbd165_97152906 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="addCategory" method="post">
    <div>
      <input type="text" class="pl-1" name='nombre' placeholder="Nombre de la categoria">
    </div>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
<?php }
}
