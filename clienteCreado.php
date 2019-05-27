<?php
    require_once 'clases/Persona.php';
    require_once 'clases/Cuenta.php';
    ?>
<div class="container-fluid" align="center">
  
    <div class="row" >
        <div class="col-md-12 bg-gris">
            
            <h2 id="creada">Nuevo Cliente!</h2>
            <table class="table">
            <thead>
                <tr>
                    
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        DNI 
                    </th>
                    <th>
                        N° de cliente
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    echo "
					<tr>
						
						<td>
                                                  {$_GET['nombre']}
						</td>
						<td>
							{$_GET['apellido']}
						</td>
                                                <td>
							{$_GET['dni']}
						</td>
						<td>
							{$_GET['numero_cliente']}
						</td>
					</tr>";
                
                ?>
            </table>
        </div>
    </div>
</div>

