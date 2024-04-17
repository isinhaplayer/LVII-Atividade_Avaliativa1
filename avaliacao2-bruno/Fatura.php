<?php

    class Fatura{

        //atributo

        private $numero;
        private $descricao;
        private $qtdItem;
        private $precoPorItem;

        //metodos

        public function teste($numero, $descricao, $qtdItem, $precoPorItem){
            $this->numero = $numero;
            $this->descricao = $descricao;
            $this->qtdItem = $qtdItem;
            $this->precoPorItem = $precoPorItem;

            if($precoPorItem < 0){
                $precoPorItem = 0.0;
            }

        }

        public function getNumero() {
            return $this->numero;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getqtdItem() {
            return $this->qtdItem;
        }

        public function getprecoPorItem() {
            return $this->precoPorItem;
        }

        ////////METODO SET////////////////


        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function setDescricao($descricao) {
            $this->numero = $descricao;
        }


        public function setqtdItem($qtdItem) {
            $this->numero = $qtdItem;
        }

        public function setprecoPorItem($precoPorItem) {
            $this->numero = $precoPorItem;
        }






    }

?>