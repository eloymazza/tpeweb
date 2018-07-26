<div class="col-md-10 push-1 mt-2 mb-2">
	<form action="modifyProduct" method="post" enctype="multipart/form-data">
			{if isset($error) }
			<div class="alert alert-danger" role="alert">{$error}</div>
			{/if}
		<div class="form-group">
			<div class="text-align">
				<label for="product-name">Elegir Producto:</label>
			</div>
			<div class="text-align">
				<select id="update-product-select" name='id_producto'>
					<option disabled selected value>Seleccione un producto</option>
					{foreach from=$products item=product}
						<option value="{$product['id_producto']}" data-item="{htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8')}">{$product['nombre']}</option>
					{/foreach}
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="update-product-name">Nuevo nombre:</label>
			</div>
			<input type="text" class="form-control" id="update-product-name" required name='nombre' name='nombre' placeholder="Nombre Nuevo">
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="update-product-description">Descripcion:</label>
			</div>
			<div class="text-align">
				<textarea id="update-product-description" name="descripcion" rows="8" cols="28"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="update-product-price">Precio:</label>
			</div>
			<input type="text" class="form-control" id="update-product-price" required name='precio' name='precio' placeholder="$$$">
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="update-product-discount">Descuento</label>
			</div>
			<input type="text" class="form-control" value=0 id="update-product-discount" name = 'descuento' placeholder="Aplique el descuento si este posee.">
		</div>
		<div class="form-group">
			<div class="text-align">
				<label>Categoria:</label>
			</div>
			<div class="text-align">
				<select name='categoria' id="update-product-category" required name='categoria'>
					{foreach from=$categories item=category}
						<option value={$category['id_categoria']}>{$category['nombre']}</option>
					{/foreach}
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="text-align">
				<label for="imagen">Imagen</label>
			</div>
			<input type="file" id="imagenes" name="imagenes[]" multiple>
			<div id="update-productos-lista-imagenes">
			</div>
		</div>
		<button type="submit"class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
