<div class="col-md-10 push-1 mt-2 mb-2">
  <form action = "modifyProduct" method="post">
    <div class="form-group">
      <label for="category-name">Elegir Producto:</label>
      <div class="form-group">
      <select name='id_producto'>
        {foreach from=$products item=product}
            <option value="{$product['id_producto']}">{$product['nombre']}</option>
        {/foreach}
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
          {foreach from=$categories item=category}
              <option value={$category['id_categoria']}>{$category['nombre']}</option>
          {/foreach}
        </select>
      </div>
    </div>
    <button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
