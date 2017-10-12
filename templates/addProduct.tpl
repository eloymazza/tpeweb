<div class="col-md-10 push-1 mt-2 mb-2">
  <form action = "addProduct" method="post">
    <div class="form-group">
      <label for="category-name">Nombre del Producto:</label>
      <input type="text" class="form-control" id="category-name" name='nombre' placeholder="Nombre del producto">
      <label for="category-name">Precio:</label>
      <input type="text" class="form-control" id="category-name"  name='precio' placeholder="$$$">
      <div class="form-group">
        <label>Producto:</label>
        <select name='categoria'>
          {foreach from=$categories item=category}
              <option value={$category['id_categoria']}>{$category['nombre']}</option>
          {/foreach}
        </select>
      </div>
      <label for="category-name">Descripcion:</label>
      <textarea name="descripcion" rows="8" cols="28"></textarea>
      <label for="category-name">Descuento?</label>
      <input type="text" class="form-control" value=0 id="category-name" name = 'descuento' placeholder="Aplique el descuento si este posee.">
    </div>
    <button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
