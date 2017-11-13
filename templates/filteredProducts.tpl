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
                {foreach from=$product['fotos'] item=foto}
                  <li>
                    <img src="{$foto['ruta']}" class="img-fluid" alt="Imagen del producto {$product['nombre']}">
                  </li>
                {/foreach}
                <div>
                    <p>{$product["descripcion"]}</p>
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
            </div>
            {/foreach}
            </div>
        </div>
    </div>
</div>
