<div class="row">
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2 js-offers-buttons category-button" id="allOffersButton">
                    Todas
                </button>
            </div>
        </div>       
        {foreach from=$categories item=category}
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-default ml-2  js-offers-buttons category-button" id="{$category['id_categoria']}">
                    {$category["nombre"]}
                </button>
            </div>
        </div>
        {/foreach}    
    </div>
    <div class="col-md-9 js-offers">
        {include file="filteredOffers.tpl"}
    </div>
</div>