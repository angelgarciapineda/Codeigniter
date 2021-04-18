<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body>
    <div class="d-flex justify-content-center" style="padding-top:50px;">
        <div>
        <h5>Pre inscripcion</h5>
            <form action="<?php echo base_url() . '/home' ?>" method="POST" autocomplete="on">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="col-md-12">
                            <label for="inputCuatri" class="form-label">Cuatrimestre</label>
                            <select id="inputCuatri" class="form-select" name="txtcuatri">
                                <option value="0">Selecciona un cuatrimestre</option>
                                <?php
                                foreach ($cuatris as $key => $value) {
                                    echo "<option value='" . $value->grouputp_id . "'>" . $value->cuatrimestre . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary col-12" style="float:right;">Enviar solicitud</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $msj ?>';

        if (mensaje == '1') {
            swal(':D', 'Tu solicitud ha sido enviada con exito!', 'success');
        } else if (mensaje == '0') {
            swal(':(', 'Hubo un error al enviar tu solicitud!', 'error');
        }
    </script>
</body>

</html>