<div class="col-md-10 push-1 mt-2 mb-2">
  <form action="addCategory" method="post">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <div>
      <input type="text" class="pl-1" name='nombre'  name='nombre' placeholder="Nombre de la categoria">
    </div>
    <button type="submit" class="btn confirm-button mt-2">Confirmar</button>
  </form>
</div>
