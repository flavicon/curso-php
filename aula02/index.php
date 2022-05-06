<h1>Ola mundo</h1>

<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/relatorio') {
  include 'relatorio.php';

  echo $teste;
} else if ($url === '/novo') {
  include 'cadastro.php';
} else if ($url === '/listar') {
  include 'listar.php';
}
?>


<label for="">Ano</label>
<select class="" name="">
  <option value=""> -- Selecione -- </option>

  <?php
    for ($ano = 1950; $ano <= 2022; $ano++) {
      echo "<option>{$ano}</option>";
    }
  ?>
</select>
