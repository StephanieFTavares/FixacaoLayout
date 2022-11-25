<?php
    include "./header.php";
?>

<div class="card text-bg-dark">
  <div class="card-header">Lista de Disciplina </div>
  <div class="card-body">
    <div class="row">

      <div class="col-3">
        <button class="btn btn-success"> + </button> 
      </div>

      <div class="col-6">
        <input name="pesquisa" class="form-control">
      </div>

      <div class="col-3">
        <button class="btn btn-primary"> Pesquisar </button> 
      </div>

    </div>
  </div>
</div>

<br />

<div class="row">
  <div class="col-12">
    <table class="table table-dark table-hover table-striped">
      <thead class="table-dark">
        <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>APELIDO</td>
          <td>SIGLA</td>
          <td>EDITAR</td>
          <td>EXCLUIR</td>
        </tr>
      </thead>

      <tbody>

        <?php
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas");
        $dados = json_decode($dados, true);
          for($i=0; $i < count($dados); $i++){
            ?>
            <tr>
              <td> <?php echo $dados[$i]["disciplinaId"]; ?> </td>
              <td> <?php echo $dados[$i]["nome"]; ?> </td>
              <td> <?php echo $dados[$i]["apelido"]; ?> </td>
              <td> <?php echo $dados[$i]["sigla"]; 
              ?> </td>
              <td><a href="#" class="btn btn-warning">Editar</a></td>
              <td><a href="#" class="btn btn-danger">Excluir</a></td>
            </tr>
            <?php
          }
        ?>

      </tbody>

    </table>

  </div>
</div>

<?php

    include "./footer.php";
?>