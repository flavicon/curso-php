<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>#ID</th>
      <th>Status</th>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Sexo</th>
      <th>Data de Nascimento</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($dados as $tutor) {
        echo "
          <tr>
            <td>{$tutor['id']}</td>
            <td>{$tutor['status']}</td>
            <td>{$tutor['nome']}</td>
          </tr>
        ";
      }
    ?>
  </tbody>
</table>
