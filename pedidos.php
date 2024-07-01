<?php

    class pedido {
        private $cod_pedido;
        private $cod_Cli;
        private $funcionario;
        private $data_pedido;
        private $data_entrega;
        private $data_envio;
        private $frete;
        private $nome_dest;
        private $endereco_dest;
        private $cidade_dest;
        private $cep_dest;
        private $pais_dest;


        function _construct($funcionario, $data_pedido, $data_entrega, $data_envio, $frete, $nome_dest, $endereco_des, $cidade_dest, $cep_dest, $pais_dest) {
            $this->funcionario = $funcionario;
            $this->data_pedido = $data_pedido;
            $this->data_entrega = $data_entrega;
            $this->data_envio = $data_envio;
            $this->frete = $frete;
            $this->nome_dest = $nome_dest;
            $this->endereco_dest = $endereco_dest;
            $this->cidade_dest = $cidade_dest;
            $this->cep_dest = $cep_dest; 
            $this->pais_dest = $pais_dest;
            
        }


        //criando funçoes "GET" "SET"
        
        function get_cod_pedido() {
            return $this->cod_pedido;
        }
        
        function set_nome($nome) {
            $this->name -> $name;
        }
        
        
    }