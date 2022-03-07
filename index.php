<?php
    require_once "./conexion.php";
    require_once "./metodos.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Materias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/fontawesome/css/all.css">

</head>

<body>
    <br>
    <br>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4" style="background-color:lightblue">
            <h1 class="mt-2 text-center">REGISTRO</h1>
                <form action="procesos/insertar.php" method="post" class="form-control" style="background-color:lightblue">
                        <label for="" class="text">Nombre</label>
                        <input required="" class="form-control " autocomplete="off" type="text" name="nombre">
                        <label for="" class="text">Creditos</label>
            <input required="" class="form-control" type="text" name="creditos">
            </div>
            <div class = "col-4" style="background-color:lightblue">
                <br>
                <br>
                    <label for="">Semestre</label>
                    <select class="form-select text-light"name="semestre" id="" style="background-color: black;">
                        <!-- <option value="">Elige una opción</option> -->
                        <option value="primero">primero</option>
                        <option value="segundo">segundo</option>
                        <option value="tercero">tercero</option>
                        <option value="cuarto">cuarto</option>
                        <option value="quinto">quinto</option>
                        <option value="sexto">sexto</option>
                        <option value="septimo">septimo</option>
                        <option value="octavo">octavo</option>
                        <option value="noveno">noveno</option>
                    </select>
                    <label for="">Carrera</label>
                    <select class="form-select text-light" name="carrera" id="" style="background-color: black;">
                        <!-- <option value="">Elige una opción</option> -->
                        <option value="sistemas computacionales">Sistemas Computacionales</option>
                        <option value="gestion empresaria">Gestion Empresarial</option>
                        <option value="industrial">Industrial</option>
                    </select>
                    <div class=" ms-5 mt-3 col-11 justify-content-center">
                    <button class="btn btn-dark my-2">Agregar</button>
                </form>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">incio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./vista.php">ver vista</a>
        </li>

</html>