<?php
  $contatos = file('../contatos.csv');
?>

<section class="row mt-5">
  <div class="col-12">
    <article class="card card-body">

      <h1>Listar</h1>
      <hr>
      <table class="table table-hover table-striped">
        <thead class="table-dark">
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php
            foreach ($contatos as $cadaContato) {
              $dados = explode(';', $cadaContato);

              if (count($dados) < 3) {
                continue;
              }

              echo "
                <tr>
                  <td>{$dados[0]}</td>
                  <td>{$dados[1]}</td>
                  <td>{$dados[2]}</td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>

    </article>
  </div>
</section>
