<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="modifyPermissions" method="post">
    <label>Modificar Prermisos</label>
    <select name='id_usuario'>
      {foreach from=$users item=user}
          <option value="{$user['id_usuario']}">{$user['email']}</option>
      {/foreach}
    </select>
    <div>
      <label for="adminCheck">Es Admin</label>
      <input type="checkbox" class="ml-1" name="admin" id="adminCheck">
    </div>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>