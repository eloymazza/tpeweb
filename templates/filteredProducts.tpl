<div class="row">
    <div class="col-md-12 ml-3 mb-2  product-shower-separator ">
        <div class="row">
            <div class="col-md-3 ml-4 p-2 category-indicator">
                <span>{$categoryName}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 product-shower ">
            {foreach from=$products item=product}
            <div class="product-box m-3 p-2 ">
                <h2>
                    {$product["nombre"]}
                </h2>
                <div>
                    <span>{$product["descripcion"]}</span>
                </div>
                <div>
                    <span>Precio: {$product["precio"]}$</span>
                </div>
                {if {$product["descuento"] > 0}}
                    <div>
                        <span>Descuento: {$product["descuento"]}%</span>
                    </div>
                {/if}
                <div>
                    {assign var="productCategoryID" value=$product["id_categoria"]}
                    {foreach from=$categories item=category}
                        {if {$category['id_categoria'] == $productCategoryID}}
                        <span>Categoria: {$category['nombre']}</span>
                        {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 pl-0">
                    <button class="comments-button js-comments-button" name="{$product['id_producto']}">Comentarios</button>
                    <div class="row">
                        <div class="col-md-8 pl-0" id="product_{$product['id_producto']}">
                        </div>
                    </div>
                </div>
            </div>
            {/foreach}
            </div>
        </div>
    </div>
</div>
