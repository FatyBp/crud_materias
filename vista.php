<?php
require_once "./Conexion.php";
require_once "./metodos.php";
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/fontawesome/css/all.css">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">incio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./vista.php">ver vista</a>
        </li>
<div class="container">
<div class="row">
            <div class="col">
                <table class="table mt-5 table-info">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Creditos</td>
                            <td>Semestre</td>
                            <td>Carrera</td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                    </thead>
                    <tbody>
                        <?php
                           $obj = new metodos(); 
                           $sql = "SELECT * from informacion";
                           $datos=$obj->mostrarDatos($sql);
                           foreach ($datos as $key) :
                        ?>
                        <tr>
                            <td><?= $key['Nombre'] ?></td>
                            <td><?= $key['creditos'] ?></td>
                            <td><?= $key['semestre'] ?></td>
                            <td><?= $key['carrera'] ?></td>
                            <td><a href="editar.php?id=<?= $key['id']?>"><button type="submit" class="btn btn-dark container-fluid mt-2">Actualizar</button></a></td>
                        <td><a href="procesos/eliminar.php?id=<?= $key['id']?>"><button type="submit" class="btn btn-dark container-fluid mt-2">Eliminar</button></a></td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>