<div class="col-md-10 push-1 mt-2 mb-2">
	<form action="addProduct" id="addProduct" method="post" enctype="multipart/form-data">
    	{if isset($error)}
      	<div class="alert alert-danger" role="alert">{$error}</div>
    	{/if}
    	<div class="form-group">
			<div class="text-align">
				<label for="nombre">Nombre del Producto:</label>
			</div>
			<input type="text" class="form-control" id="name" required name='nombre' placeholder="Nombre del producto">
      	</div>
		<div class="form-group">
			<div class="text-align">
				<label for="price">Precio:</label>
			</div>
			<input type="text" class="form-control" id="price" required name='precio' placeholder="$$$">
		</div>
		<div class="form-group">
			<div class="text-align">
        		<label>Categoria:</label>
				<select name='categoria' required>
					{foreach from=$categories item=category}
						<option value={$category['id_categoria']}>{$category['nombre']}</option>
					{/foreach}
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="description">Descripcion:</label>
			</div>
			<div class="text-align">
				<textarea name="descripcion" id="description" rows="8" cols="28"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="discount">Descuento:</label>
				<input type="text" class="form-control" value=0 id="discount" name='descuento' placeholder="Aplique el descuento si este posee.">
			</div>
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="imagen">Imagen</label>
			</div>
			<input type="file" id="imagenes" name="imagenes[]" multiple required>
		</div>
    	<button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  	</form>
</div>
