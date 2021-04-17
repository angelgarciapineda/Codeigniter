<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Registrar alumno</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <h1>Ya casi eres UTP</h1>
                <h2>Completa el registro</h2>
                <form class="row g-3" action="<?php echo base_url() . '/register' ?>" method="POST" autocomplete="on">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtname" id="inputName" placeholder="Nombre completo">
                    </div>
                    <div class="col-6">
                        <label for="inputLastName" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" name="txtlast" id="inputLastName" placeholder="Apellido paterno">
                    </div>
                    <div class="col-md-6">
                        <label for="inputMotherLastName" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" name="txtmother" id="inputMotherLastName" placeholder="Apellido materno">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="inputDate">
                            Fecha de nacimiento
                        </label>
                        <input type="date" class="form-control" name="txtdate" id="inputDate">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCarrera" class="form-label">Carrera</label>
                        <input type="text" class="form-control" name="txtcarrera" id="inputCarrera" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputSpecialization" class="form-label">Division</label>
                        <select id="inputSpecialization" class="form-select" name="txtspecialization">
                            <option value="0">Elige una division</option>
                            <?php
                            foreach ($datitos as $key => $value) {
                                echo "<option value='" . $value->specialization_id . "'>" . $value->specialization . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputMark" class="form-label">Calificación</label>
                        <input type="text" class="form-control" name="txtmark" id="inputMark" placeholder="Promedio de bachillerato">
                    </div>
                    <div class="col-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="txtemail" id="inputEmail" placeholder="correo@algo.com">
                    </div>
                    <div class="col-6">
                        <label for="inputPhone" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="txtphone" id="inputPhone">
                    </div>
                    <div class="col-6">
                        <label for="pswd" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" name="txtpswrd" id="pswd" placeholder="Crea una contraseña">
                    </div>
                    <div class="col-6">
                        <label for="confir_pswd" class="form-label">Confirmar contraseña</label>
                        <input type="text" class="form-control" name="txtconfirpswrd" id="confir_pswd" placeholder="Confirma tu contraseña">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary col-12" style="float:right;">Registrarse</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
            </div>
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
            swal(':D', 'Agregado con exito!', 'success');
        } else if (mensaje == '0') {
            swal(':(', 'Fallo al agregar!', 'error');
        } else if (mensaje == '2') {
            swal(':D', 'Actualizado con exito!', 'success');
        } else if (mensaje == '3') {
            swal(':(', 'Fallo al Actualizar!', 'error');
        } else if (mensaje == '4') {
            swal(':D', 'Eliminado con exito!', 'success');
        } else if (mensaje == '5') {
            swal(':(', 'Fallo al eliminar!', 'error');
        }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>