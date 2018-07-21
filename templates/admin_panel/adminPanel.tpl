{include file="common_elements/head.tpl"}
<body>
    <div class="container"> <!-- Contenedor del admin Panel -->
      	<div class="row justify-content-center"> <!-- Row rojo admin Panel -->
        	<div class="col-sm-8 mt-2 p-2 admin-panel"> 
          		<div class="row mb-3"> <!-- Row Para el titulo -->
            		<div class="col-md-12">
              			<h1>Admin Panel</h1>
					</div>
				</div>
          		<div class="row justify-content-center"> <!-- Row Para el contenedor blanco de opciones -->
					<div class="col-md-10 bg-white borders p-4">
						<div class="row"> <!-- Row Para el subtitulo categorias-->
							<div class="col-md-12">
								<h2>Categorias:</h2>
							</div>
						</div>
						<div class="row justify-content-center"> <!-- Row Para todas las opciones sobre categorias -->
							{include file="admin_panel/categorySection.tpl"}
						</div>
						<div class="row justify-content-center"> <!-- Row Para el subtitulo productos-->
							<div class="col-md-12">
								<h2>Productos:</h2>
							</div>
						</div>
						<div class="row justify-content-center"> <!-- Row Para todas las opciones sobre productos -->
							{include file="admin_panel/productsSection.tpl"}
						</div>
						<div class="row justify-content-center"> <!-- Row Para el subtitulo Usuarios -->
							<div class="col-md-12"> 
								<h2>Usuarios:</h2>
							</div>
						</div>
						<div class="row justify-content-center"> <!-- Row Para todas las opciones sobre productos -->
							{include file="admin_panel/usersSection.tpl"}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6 push-3">
			<a href="index"><button class="admin-button  mt-4 mb-4 borders">Volver</button></a>
		</div>
	</div>
</body>
{include file="dependences.tpl"}
