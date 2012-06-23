<?php

  function pessoaComAfinidade($pessoa, $pessoas) {
    $valorAfinidadePessoa = null;
    $nomePessoa = null;

    foreach ($pessoas as $nome => $sabores) {
      $valorAfinidade = retornaValorAfinidade($pessoa, $pessoas[$nome]);

      if (($valorAfinidadePessoa == null and $nomePessoa == null) or $valorAfinidade < $valorAfinidadePessoa) {
        $valorAfinidadePessoa = $valorAfinidade;
        $nomePessoa = $nome;
      }
    }

    return $nomePessoa;
  }

  function retornaValorAfinidade($pessoa1, $pessoa2) {
    $somatoria = 0;

    foreach ($pessoa1 as $sabor => $valor) {
      $somatoria += abs($pessoa2[$sabor] - $valor);
    }

    return $somatoria;
  }