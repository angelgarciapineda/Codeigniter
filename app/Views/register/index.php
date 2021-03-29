<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- <?php echo print_r($datos) ?> -->
            </div>
            <div class="col-sm-6">
                <form class="row g-3" action="<?php echo base_url('/register') ?>" method="POST">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Luis Angel">
                    </div>
                    <div class="col-12">
                        <label for="inputLastName" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" id="inputLastName" placeholder="Garcia">
                    </div>
                    <div class="col-md-6">
                        <label for="inputMotherLastName" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" id="inputMotherLastName">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="garciapinedaluisangel@gmail.com">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="col-md-6">
                        <label for="inputConfirmPassword" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="inputConfirmPassword">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </form>
                <br>
                <hr>
                <h2>Listado de alumnos registrados</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table table-responsive">
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Email</th>
                                    <th>Fecha de nacimiento</th>
                                </tr>
                                <?php foreach ($datos as $key) : ?>
                                    <tr>
                                        <td> <?php echo $key->nombre ?> </td>
                                        <td> <?php echo $key->apellido_p ?> </td>
                                        <td> <?php echo $key->apellido_m ?> </td>
                                        <td> <?php echo $key->email ?> </td>
                                        <td> <?php echo $key->fecha_nac ?> </td>

                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>