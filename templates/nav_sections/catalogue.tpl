
<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2 js-catalogue-buttons category-button" id="allProductsButton">
                    Todos
                </button>
            </div>
        </div>
        {foreach from=$categories item=category}
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2  js-catalogue-buttons category-button" id="{$category['id_categoria']}">
                    {$category["nombre"]}
                </button>
            </div>
        </div>
        {/foreach}
    </div>
    <div class="col-md-9 js-catalogue">
        {include file="filteredProducts.tpl"}
    </div>
</div>
