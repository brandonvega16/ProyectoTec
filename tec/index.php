<?php
require_once "clases/consultar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="librerias/ti-icons/css/themify-icons.css">
</head>

<body>
    <br><br>
    <div class="container">
        <h1 style="text-align: center;">Sistema para Realizar CRUD</h1>
        <br>
        <form class="form-sample" method="post" id="frmDatos">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">CURP </label>
                        <div class="col-sm-9">
                            <input type="number" id="idMenor" name="idMenor" class="form-control" hidden readonly>
                            <input type="text" name="CURP" id="CURP" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nombre </label>
                        <div class="col-sm-9">
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Apellido Paterno </label>
                        <div class="col-sm-9">
                            <input type="text" name="apPaterno" id="apPaterno" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Apellido Materno </label>
                        <div class="col-sm-9">
                            <input type="text" name="apMaterno" id="apMaterno" class="form-control">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fecha Nac. </label>
                        <div class="col-sm-9">
                            <input type="date" name="fechaNac" id="fechaNac" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Genero </label>
                        <div class="col-sm-9">
                            <select name="genero" id="genero" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Color de Ojos </label>
                        <div class="col-sm-9">
                            <input type="text" name="color_ojos" id="color_ojos" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Color de Cabello </label>
                        <div class="col-sm-9">
                            <input type="text" name="color_cabello" id="color_cabello" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Etnia </label>
                        <div class="col-sm-9">
                            <input type="text" name="etnia" id="etnia" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Otros Rasgos </label>
                        <div class="col-sm-9">
                            <input type="text" name="otros_rasgos" id="otros_rasgos" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Estatus </label>
                        <div class="col-sm-9">
                            <select name="status" id="status" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="A">Alta</option>
                                <option value="B">Baja</option>
                                <option value="E">Extraviado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Telefono </label>
                        <div class="col-sm-9">
                            <input type="text" name="telefono" id="telefono" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Correo </label>
                        <div class="col-sm-9">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>



            <button type="button" id="btnRegistro" name="btnRegistro" class="btn btn-primary">Enviar</button>
            <button type="button" id="btnUpdate" name="btnUpdate" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
<br>

    <h3 style="text-align: center;">Registros</h3>
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>CURP</th>
                        <th>Nombre</th>
                        <th>Nacimiento</th>
                        <th>Genero</th>
                        <th>Ojos</th>
                        <th>Cabello</th>
                        <th>Etnia</th>
                        <th>Rasgos</th>
                        <th>Estatus</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($ver = mysqli_fetch_row($result)):?>
                        <tr>
                            <td><?php echo $ver[0]?></td>
                            <td><?php echo $ver[1]?></td>
                            <td><?php echo $ver[2].' '.$ver[3].' '.$ver[4]?></td>
                            <td><?php echo $ver[5]?></td>
                            <td><?php echo $ver[6]?></td>
                            <td><?php echo $ver[7]?></td>
                            <td><?php echo $ver[8]?></td>
                            <td><?php echo $ver[9]?></td>
                            <td><?php echo $ver[10]?></td>
                            <td><?php echo $ver[11]?></td>
                            <td><?php echo $ver[12]?></td>
                            <td><?php echo $ver[13];?></td>
                            <td>
                            <button onclick="actualizar('<?php echo $ver[0]; ?>', '<?php echo $ver[1]; ?>', '<?php echo $ver[2]; ?>', '<?php echo $ver[3]; ?>', '<?php echo $ver[4]; ?>', '<?php echo $ver[5]; ?>', '<?php echo $ver[6]; ?>', '<?php echo $ver[7]; ?>', '<?php echo $ver[8]; ?>', '<?php echo $ver[9]; ?>', '<?php echo $ver[10]; ?>', '<?php echo $ver[11]; ?>', '<?php echo $ver[12]; ?>', '<?php echo $ver[13]; ?>')"  class="btn btn-primary"><i class="ti-pencil-alt"></i></button>
                            <button onclick="eliminar('<?php echo $ver[0]; ?>')"  class="btn btn-danger"><i class="ti-trash"></i></button>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <br>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/registro.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
</body>

</html>