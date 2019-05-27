<div class="container-fluid" align="center">
    <?php
    require_once 'clases/Banco.php';
    ?>
    <div class="row">
    <div class="col-md-12">
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
                        N° de Cliente
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (app\clases\Banco::$coleccionClientes as $c) {
                    echo "
					<tr>
						
						<td>
                                                  {$c['nombre']}
						</td>
						<td>
							{$c['apellido']}
						</td>
						<td>
							{$c['dni']}
						</td>
                                                <td>
							{$c['numero_cliente']}
						</td>
					</tr>";
                }
                ?>


            </tbody>
        </table>
    </div>
</div>
    
</div>
