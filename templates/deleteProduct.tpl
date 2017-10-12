<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="deleteProduct" method="post">
    <label>Elegir Producto</label>
    <select name='id_producto'>
      {foreach from=$products item=product}
          <option value="{$product['id_producto']}">{$product['nombre']}</option>
      {/foreach}
    </select>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
