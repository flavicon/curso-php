<?php
  if (false === empty($_POST)) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    //abrindo o arquivo
    $arquivo = fopen('../contatos.csv', 'a+');

    //escrevendo/salvando dados no arquivo
    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);

    //fechando o arquivo
    fclose($arquivo);

    //redireciona o usuario pra tela de listar
    header('location: /listar');
    echo '<script> location.href="/listar"; </script>'
  }
?>

<section class="row mt-5">
  <div class="col-8 offset-2">
    <article class="card card-body">

      <h1>Cadastro</h1>
      <hr>

      <form action="" method="post">
        <input name="nome" class="form-control mt-1" placeholder="Nome"/>
        <input name="email" class="form-control mt-1" placeholder="Email"/>
        <input name="telefone" class="form-control mt-1" placeholder="Telefone"/>

        <div class="d-grid mt-3">
          <button class="btn btn-primary">SALVAR</button>
        </div>
      </form>
    </article>
  </div>
</section>
