<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="deleteUser" method="post">
    <label>Elegir Usuario</label>
    <select name='id_usuario'>
      {foreach from=$users item=user}
          <option value="{$user['id_usuario']}">{$user['email']}</option>
      {/foreach}
    </select>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>