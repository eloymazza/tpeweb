<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="modifyCategory" method="post">
    <label>Elegir Categoria</label>
    <select name='nombre-categoria'>
      {foreach from=$categories item=category}
          <option>{$category['nombre']}</option>
      {/foreach}
    </select>
    <div>
      <input type="text" class="pl-1" name='nuevo-nombre' placeholder="Nombre Nuevo">
    </div>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
