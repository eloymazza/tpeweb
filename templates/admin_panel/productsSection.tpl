<div class="col-md-10">
    <div>
        <button class="admin-button m-2">Agregar Productos</button>
        {if isset($showAddProduct)}
        <div class="row justify-content-center">
        {else}
        <div class="row hide justify-content-center">
        {/if}
        {include file="admin_panel/addProduct.tpl"}
        </div>
    </div>
    <div>
        <button class="admin-button m-2">Modificar Productos</button>
        {if isset($showModifyProduct)}
        <div class="row justify-content-center">
        {else}
        <div class="row hide justify-content-center">
        {/if}
        {include file="admin_panel/modifyProduct.tpl"}
        </div>
    </div>
    <div>
        <button class="admin-button m-2">Eliminar Productos</button>
        <div class="row hide justify-content-center">
            {include file="admin_panel/deleteProduct.tpl"}
        </div>
    </div>
<div>