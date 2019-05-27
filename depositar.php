<div class="container-fluid" align="center">
    <?php
    require_once 'header.php';
    require_once 'nav.php';
    require_once 'clases/Banco.php';
    ?>
 <div class="row" >
        <div class="col-md-12">
            <h4>
                Realizar depósito
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form role="form" class="col-md-3">
                <div class="form-group">
                        <label for="cuenta">
                            N° de Cuenta:
                        </label>
                        <input type="number" class="form-control" id="cuenta" name="cuenta" />
                    </div>
                    <div class="form-group">
                        <label for="saldo">
                            Monto a depositar:
                        </label>
                        <input type="number" class="form-control" id="monto" name="monto" />
                    </div>
                    <button type="submit" id="boton" name="boton" class="btn btn-primary">
                        Depositar
                    </button>
                </form>
            </div>

        </div>

    </div>
