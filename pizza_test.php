<?php

  require_once('simpletest/autorun.php');
  require_once("pizza.php");

  class PizzaTest extends UnitTestCase {
    private $pessoa;
    private $pessoas;

    public function setUp() {
      $this->pessoa = array(
        "Marguerita"      => 4,
        "Quatro queijos"  => 5,
        "Escarola"        => 4
      );

      $this->pessoas = array(
        "pessoa2" => array(
          "Marguerita"      => 3,
          "Quatro queijos"  => 4,
          "Escarola"        => 1
        ),
        "pessoa3" => array(
          "Marguerita"      => 4,
          "Quatro queijos"  => 4,
          "Escarola"        => 1
        ),
        "pessoa4" => array(
          "Marguerita"      => 5,
          "Quatro queijos"  => 5,
          "Escarola"        => 5
        )
      );
    }

    public function testEncontraAfinidade() {
      $pessoaComAfinidade = pessoaComAfinidade($this->pessoa, $this->pessoas);
      $this->assertEqual($pessoaComAfinidade, "pessoa4");
    }

    public function testRetornaValorAfinidade() {
      $resultado1 = retornaValorAfinidade($this->pessoa, $this->pessoas["pessoa2"]);
      $this->assertEqual($resultado1, 5);

      $resultado2 = retornaValorAfinidade($this->pessoa, $this->pessoas["pessoa4"]);
      $this->assertEqual($resultado2, 2);
    }

  }

