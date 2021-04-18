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
        <form class="row g-3" action="<?php echo base_url() . '/home/groups' ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Inscribir alumnos a un grupo</h5>
                    <div class="col-12">
                        <select id="inputStudent" class="form-select" name="txtstudent">
                            <option value="0">Estudiante</option>
                            <?php
                            if ($student != null) {
                                foreach ($student as $key => $value) {
                                    echo "<option value='" . $value->student_id . "'>" . $value->studentInfo . "</option>";
                                }
                            } else {
                                echo "<option value='notOption'>Selecciona un estudiante</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <select id="inputGrupos" class="form-select" name="txtgrupo">
                            <option value="0">Grupos</option>
                            <?php
                            if ($grupos != null) {
                                foreach ($grupos as $key => $value) {
                                    echo "<option value='" . $value->grouputp_id . "'>" . $value->grupo . "</option>";
                                }
                            } else {
                                echo "<option value='notOption'>Selecciona un grupo</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Inscribir</button>
                </div>
            </div>
        </form>
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
            swal(':D', 'Se inscribio al alumno con exito!', 'success');
        } else if (mensaje == '0') {
            swal(':(', 'Hubo un error al enviar tu solicitud!', 'error');
        }
    </script>
</body>

</html>