<div class="container-fluid" align="center">
    <?php
    require_once 'header.php';
    require_once 'nav.php';
    require_once 'clases/Banco.php';
    ?>
    <div class="row" >
        <div class="col-md-12">
            <h3>
                Nueva Cuenta
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form role="form" class="col-md-3">
                <div class="form-group">
                    <label for="tipo_de_cuenta">
                        Tipo: 
                    </label>
                    <select name="tipo_de_cuenta" id="tipo_de_cuenta">
                        <option value="caja_ahorro" <?= !empty($_GET['tipo_de_cuenta']) && $_GET['tipo_de_cuenta'] == 'Caja de Ahorro' ? 'selected' : ''; ?> > Caja de Ahorro </option>
                        <option value="cuenta_corriente" <?= !empty($_GET['tipo_de_cuenta']) && $_GET['tipo_de_cuenta'] == 'Cuenta Corriente' ? 'selected' : ''; ?> > Cuenta Corriente </option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="numero_cliente">
                        N° de cliente:
                    </label>
                    <input type="number" class="form-control" id="numero_cliente" name="numero_cliente"/>
                </div>
                <div class="form-group">
                    <label for="cuenta">
                        N° de Cuenta:
                    </label>
                    <input type="number" class="form-control" id="cuenta" name="cuenta" />
                </div>
                <div class="form-group">
                    <label for="saldo">
                        Ingrese saldo inicial:
                    </label>
                    <input type="number" class="form-control" id="saldo" name="saldo" />
                </div>




                <button type="submit" id="boton" name="boton" class="btn btn-primary">
                    Crear Cuenta
                </button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
</div>

