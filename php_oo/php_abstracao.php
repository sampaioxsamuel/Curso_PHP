<?php

        //modelo 
        class Funcionario {

            // atributos
            public $nome = 'João';
            public $telefone = '85 98882-0844';
            public $numFilhos = 1;
            
            // metodos

            function resumirCadFunc() {
                // Usando o metodo $this numa condição
                // if($this->numFilhos <= 1){
                //     return "$this->nome que utiliza o numero $this->telefone tem $this->numFilhos filho(a)";
                // }else{
                //     return "$this->nome que utiliza o numero $this->telefone tem $this->numFilhos filho(as)";
                // }
                return "$this->nome que utiliza o numero $this->telefone tem $this->numFilhos filho(as)";
            }

            function modificarNumFilhos($qtdFilhos){
                $this->numFilhos = $qtdFilhos;
                return "$this->nome que utiliza o numero $this->telefone tem $this->numFilhos filho(as)";
            }

        }

        $y = new Funcionario();

        echo $y-> resumirCadFunc();
        echo "<br><hr>";
        echo $y-> modificarNumFilhos(3);

        $z = new Funcionario();
        echo "<br><hr>";
        echo $z-> modificarNumFilhos(10);



?>