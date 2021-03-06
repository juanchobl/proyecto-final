<html>
	<head>
		<title>Inmobiliaria SB- Pagina del Administrador</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/footer_style.css">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	</head>
	
	<body>

	    <div class="container text-center">
				<h1>Actualización de datos de la propiedad</h1>
				<br><h4>por favor ingrese todos los datos que se le piden, los que quiera actualizar digitelos diferente a los que ya estan</h4>	
		</div>
		

		<br><br>

        <div class="container">
         <div class="row">
	         	<form action="propiedad_modificada.php" method="post" enctype="multipart/form-data">
		      	    
                    <div class="form-group">
			           <label for="campo_identificador">tipo</label>
			      	    <select class="form-control" name="tipo">
							  <option value="casa">Casa</option>
							  <option value="apartamento">Apartamento</option>
							  <option value="oficina">Oficina</option>
							  <option value="local">Local</option>
							  <option value="bodega">Bodega</option>
						</select>
		            </div>
		      	   
					 <div class="form-group">
	                    <label for="campo_identificador">Zona</label>
			      	    <select class="form-control" name="zona">
							  <option value="Norte">Norte</option>
							  <option value="Sur">Sur</option>
							  <option value="Oriente">Oriente</option>
							  <option value="Occidente">Occidente</option>
                              <option value="Centro">Centro</option>
						</select>
					</div>

					<div class="form-group">
			            <label for="campo_identificador">Dirección</label>
			            <input type="text" class="form-control" name="direccion">
		            </div>

		            <div class="form-group">
			            <label for="campo_identificador">Barrio</label>
			            <input type="text" class="form-control" name="barrio">
		            </div>

		            <div class="form-group">
			            <label for="campo_identificador">Descripcion</label>
			            <textarea name="descripcion" class="form-control" rows="5" cols="10"></textarea>
		            </div>

		             <div class="form-group">
	                    <label for="campo_identificador">Disponibilidad</label>
			      	    <select class="form-control" name="disponibilidad">
							  <option value="Si">Si</option>
							  <option value="No">No</option>
						</select>
					</div>

					 <div class="form-group">
	                    <label for="campo_identificador">Servicio</label>
			      	    <select class="form-control" name="servicio">
							  <option value="Alquiler">Alquiler</option>
							  <option value="Compra">Compra</option>
						</select>
					</div>

                    <div class="form-group">
			            <label for="campo_identificador">Valor</label>
			            <input type="text" class="form-control" name="valor">
		            </div>

		            <div class="form-group">
			            <label for="campo_identificador">Administracion</label>
			            <input type="text" class="form-control" name="administracion">
		            </div>

		            <?php 
                         echo '<input type="hidden" name="id_inmueble" value='.$_GET["id"].'>';
		             ?>

	                   <div class="row">
	                       <div class="col-md-offset-5">
	                          <input type="submit" value="Actualizar inmueble" class="btn btn-default col-md-4">
	                        </div>  
	                   </div>
	        </form>
         </div>	
     	</div>
	</body>
</html>