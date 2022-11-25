<?php
    include "./header.php";
?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
<p>Lista de Salas</p>
<div class="button">

  <div class="mb-3 row">
    <a class="col-sm-2 col-form-label btn btn-primary">CADASTRAR</a>
    <div class="col-sm-8">
      <input type="search" class="form-control">
    </div>
    <button class="col-sm-2 col-form-label btn btn-outline-primary">PESQUISAR</button>
  </div>

</div><br />

<table class="table table-dark">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Nome</th>
  <th scope="col">Sigla</th>
  <th scope="col">Apelido</th>
</tr>
</thead>
<tbody>
<table class="table table-striped">
<tr>
  <th scope="row">1</th>
  <td>Sala 01</td>
  <td>sl-01</td>
  <td>01</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
    
<tr>
  <th scope="row">2</th>
  <td>Sala 02</td>
  <td>sl-02</td>
  <td>02</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">3</th>
  <td>Sala 03</td>
  <td>sl-03</td>
  <td>03</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">4</th>
  <td>Sala 04</td>
  <td>sl-04</td>
  <td>04</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">5</th>
  <td>Sala 05</td>
  <td>sl-05</td>
  <td>05</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">6</th>
  <td>Sala 06</td>
  <td>sl-06</td>
  <td>06</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">7</th>
  <td>Sala 07</td>
  <td>sl-07</td>
  <td>07</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
</tbody>
</table>

</div>
</div>

</div>

<?php

    include "./footer.php";
?>