<?php

        //modelo
        class Funcionario {

            // atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;

            // metodos
            // setters
            function setNome($nome){
                $this->nome = $nome;
            }
            function setTelefone($telefone){
                $this->telefone = $telefone;
            }
            function setNumFilhos($numFilhos){
                $this->numFilhos = $numFilhos;
            }

            // getters

            function getNome() {
                return $this->nome;
            }
            function getTelefone() {
                return $this->telefone;
            }
            function getNumFilhos() {
                return $this->numFilhos;
            }

            function resumirCadFunc() {
                return "$this->nome que utiliza o numero $this->telefone tem $this->numFilhos filho(as)";
            }
        }

        $y = new Funcionario();
        $y-> setNome('Joãozinho');
        $y-> setTelefone('85 988888844');
        $y-> setNumFilhos(4);

        echo $y->getNome() . " que utiliza o numero " . $y->getTelefone(). " tem " . $y->getNumFilhos() . " filhos(as)";
        echo '<br>';

        $z = new Funcionario();
        $z-> setNome('Maria');
        $z-> setTelefone('85 123456789');
        $z-> setNumFilhos(2);

        echo $z->getNome() . " que utiliza o numero " . $z->getTelefone(). " tem " . $z->getNumFilhos() . " filhos(as)";
        echo '<br>';


?>
