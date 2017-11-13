<div class="col-md-10 push-1 mt-2 mb-2">
  <form action = "addProduct" id="addProduct" method="post" enctype="multipart/form-data">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <div class="form-group">
      <label for="name">Nombre del Producto:</label>
      <input type="text" class="form-control" id="name" required name='nombre' placeholder="Nombre del producto">
      <label for="price">Precio:</label>
      <input type="text" class="form-control" id="price" required name='precio' placeholder="$$$">
      <div class="form-group">
        <label>Categoria:</label>
        <select name='categoria' required>
          {foreach from=$categories item=category}
              <option value={$category['id_categoria']}>{$category['nombre']}</option>
          {/foreach}
        </select>
      </div>
      <label for="description">Descripcion:</label>
      <textarea name="descripcion" id="description" rows="8" cols="28"></textarea>
      <label for="discount">Descuento?</label>
      <input type="text" class="form-control" value=0 id="discount" name = 'descuento' placeholder="Aplique el descuento si este posee.">
      <label for="imagen">Imagen</label>
      <input type="file" id="imagenes" name="imagenes[]" multiple required>
    </div>
    <button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
