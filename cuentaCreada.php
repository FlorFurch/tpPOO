<?php
    require_once 'clases/Cuenta.php';
    ?>
<div class="container-fluid" align="center">
  
    <div class="row" >
        <div class="col-md-12 bg-gris">
            
            <h2 id="creada">Cuenta Creada!</h2>
            <table class="table">
            <thead>
                <tr>
                    
                    <th>
                        N° de cliente
                    </th>
                    <th>
                        N° Cuenta
                    </th>
                    <th>
                        Tipo
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    echo "
					<tr>
						
						<td>
                                                  {$_GET['numero_cliente']}
						</td>
						<td>
							{$_GET['cuenta']}
						</td>
						<td>
							{$_GET['tipo_de_cuenta']}
						</td>
					</tr>";
                
                ?>
            </table>
        </div>
    </div>
</div>

