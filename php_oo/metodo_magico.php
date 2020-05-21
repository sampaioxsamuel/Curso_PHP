<?php

        //modelo
        class Funcionario {

            // atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
            public $cargo = null;
            public $salario = null;


            // metodos magicos // overloading
            function __set($atributo, $valor) {
                $this->$atributo = $valor;
            }
            function __get($atributo){
                return $this->$atributo;
            }
            //chamar atributos dentro da função
            function resumirFuncionario() {
              return $this->__get('nome') . " que utiliza o numero " . $this->__get('telefone'). " do cargo " . $this->__get('cargo') .
              " que recebe R$" . $this->__get('salario') . " tem " . $this->__get('numFilhos') . " filho(as)" ;
            }
        }

        $y = new Funcionario();

        $y-> __set('nome', 'Joãozinho');
        $y-> __set('telefone', '85 988888844');
        $y-> __set('numFilhos', 4);
        $y-> __set('cargo', 'Administrador');
        $y-> __set('salario', 1.901);

        $y-> resumirFuncionario();
        echo $y->resumirFuncionario();

?>
