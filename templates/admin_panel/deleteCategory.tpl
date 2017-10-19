<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="deleteCategory" method="post">
    <label>Elegir Categoria</label>
    <select name='id_categoria'>
      {foreach from=$categories item=category}
          <option value="{$category['id_categoria']}">{$category['nombre']}</option>
      {/foreach}
    </select>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
