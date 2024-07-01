<?php

    class itenspedido {
        private $cod_dedido;
        private $cod_produto;
        private $preco_unitario;
        private $quantidade;
        private $desconto;


        function _construct( $preco_unitario, $quantidade, $desconto) {
            $this->preco_unitario = $preco_unitario;
            $this->quantidade =  $quantidade;
            $this->desconto =  $desconto;
        }

         //criando funçoes "GET" "SET"
        
        function get_cod_dedido() {
            return $this->cod_dedido;
        }
        
        function get_cod_produto() {
            return $this->cod_produto;
        }
        
        function set_preco_unitario($preco_unitario) {
            $this->preco_unitario -> $preco_unitario;
        }

        function set_quantidade($quantidade) {
            $this->quantidade -> $quantidade;
        }

        function set_desconto($desconto) {
            $this->desconto -> $desconto;
        }
    }