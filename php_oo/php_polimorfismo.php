<?php

    class Veiculo {
            
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo "Acelerar";
        }

        function freiar(){
            echo "Freiar";
        }

        function trocarMarcha (){
            echo "desengatar embreagem com o pé e passar a marcha com a mão";
        }
    }

    class Carro extends Veiculo{
        
        public $tetoSolar = true;

        function __construct($placa, $cor){
            $this -> placa = $placa;
            $this -> cor = $cor;
        }

        function abrirTetoSolar(){
            echo "Abrir teto solar";

        }

        function alterarPosVolante(){
            echo "Alterar posição volante";
        }

    }

    class Moto extends Veiculo {

        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this -> placa = $placa;
            $this -> cor = $cor;
        }

        function empinar(){
            echo "Empinar";
        }

        function trocarMarcha (){
            echo "desengatar embreagem com a mão e passar a marcha com o pé";
        }
    }

    

    $carro = new Carro('ABCD1357', 'Preto');
    $moto = new Moto('ASDF2468', 'Vermelho');

    $carro -> trocarMarcha();
    echo "<br>";
    $moto -> trocarMarcha();

?>