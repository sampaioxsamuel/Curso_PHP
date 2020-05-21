<?php

    class Pessoa {

      public $nome = null;

      // metodo construtor
      function __construct($nome){
          echo '<br>objeto iniciado';
          $this->nome = $nome;
      }

      // metodo destrutor
      function __destruct(){
          echo '<br>objeto removido';
      }

      function __get($atributo){
          return $this->$atributo;
      }
      function correr(){
          return $this->__get('nome') . ' esta correndo';
      }
    }

    $pessoa = new Pessoa('Samuel');
    echo "<br>" .  $pessoa->correr();
    unset($pessoa);

    echo "<hr>";

    $pessoa2 = new Pessoa('João');
    echo "<br>" .  $pessoa2->correr();

    /* Por padrão quando se tem um metodo destrutor ele é fechado após a execução das instancias
    ou posso usar o unset para destruir no meio da aplicação
    unset($pessoa);
    */

 ?>
