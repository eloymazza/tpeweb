<?php
/* Smarty version 3.1.30, created on 2017-10-12 07:10:33
  from "C:\xampp\htdocs\Proyectos\TPERWK\templates\addCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59def949005bb1_24858008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '136a300a26dc09805d109916edd446809ba0274f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\TPERWK\\templates\\addCategory.tpl',
      1 => 1507785027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59def949005bb1_24858008 (Smarty_Internal_Template $_smarty_tpl) {
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
