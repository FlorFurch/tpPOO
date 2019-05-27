<div class="container-fluid" align="center">
	<?php
        require_once 'header.php';
        require_once 'nav.php';
        require_once 'clases/Banco.php';
        ?>
	<div class="row" >
		<div class="col-md-12">
			<h3>
				Nuevo Cliente
			</h3>
		</div>
	</div>
   
	<div class="row">
		<div class="col-md-12">
			<form role="form" class="col-md-3">
				<div class="form-group">
					<label for="nombre">
						Nombre:
					</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" />
				</div>
                            <div class="form-group">
					<label for="apellido">
						Apellido:
					</label>
                                <input type="text" class="form-control" id="apellido" name="apellido"/>
				</div>
                            <div class="form-group">
					<label for="dni">
						DNI:
					</label>
                                <input type="number" class="form-control" id="dni" name="dni" />
				</div>
                            <div class="form-group">
					<label for="numero_cliente">
						Numero de cliente:
					</label>
                                <input type="number" class="form-control" id="numero_cliente" name="numero_cliente"/>
				</div>
				
				
				 
                            <button type="submit" id="boton" name="boton" class="btn btn-primary">
					Ingresar
				</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div>

 
        <?php
                if (!empty($_GET['dni']) && !empty($_GET['apellido']) && !empty($_GET['nombre']) && !empty($_GET['numero_cliente'])) {
                    foreach (\app\clases\Banco::$coleccionClientes as $cliente) {
            if ($_GET['numero_cliente'] == $cliente['numero_cliente']) {
                require_once 'clienteExistente.php';
            } elseif ($_GET['numero_cliente'] != $cliente['numero_cliente']) {

                require_once 'clienteCreado.php';
            } 
        }
            $nuevoCliente = new \app\clases\Cliente($_GET['dni'], $_GET['apellido'], $_GET['nombre'], $_GET['numero_cliente']);
            
        }
        
        
        require_once 'ListadoDeClientes.php';
        ?>
   