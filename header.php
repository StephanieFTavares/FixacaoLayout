<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Hello, Welcome</title>
</head>
<style>
    body{background-color: #cad2c5 !important;}
    a:hover{color:rgb(83 105 174) !important;}
</style>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=" ./index.php"> 
    <img src="./assets/img/LOGO.png" alt="Logo" width="60" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./teacher.php">Professores</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="./cadastro.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item text-light" href="./alunos.php">Alunos</a></li>
            <li><a class="dropdown-item text-light" href="./cursos.php">Cursos</a></li>
            <li><a class="dropdown-item text-light" href="./pos.php">Pos Graduação</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./salas.php">Salas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="./disciplinas.php">Disciplinas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-3">