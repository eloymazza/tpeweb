{include file="head.tpl"}
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 push-3 mt-2 p-2 admin-panel">
          <div class="row mb-3">
            <div class="col-md-12">
              <h1>Admin Panel</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 push-1 bg-white p-1 pb-4 borders">
              <div class="row">
                <div class="col-md-12">
                  <h2>Categorias:</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 push-1">
                  <div>
                    <button class="admin-button m-2">Agregar Categoria</button>
                    <div class="row hide">
                      {include file="addCategory.tpl"}
                    </div>
                  </div>
                  <div>
                    <button class="admin-button m-2" >Modificar Categoria</button>
                    <div class="row hide">
                      {include file="modifyCategory.tpl"}
                    </div>
                  </div>
                  <div>
                    <button class="admin-button m-2 " >Eliminar Categoria</button>
                    <div class="row hide">
                      {include file="deleteCategory.tpl"}
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h2>Productos:</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 push-1">
                  <div>
                    <button class="admin-button m-2">Agregar Productos</button>
                  </div>
                  <div>
                    <button class="admin-button m-2">Modificar Productos</button>
                  </div>
                  <div>
                    <button class="admin-button m-2">Eliminar Productos</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 push-3">
              <button class="admin-button  mt-4 mb-4 borders">Salir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    {include file="dependences.tpl"}
</body>
