<?php

    class cliente {
        // Criando classes
        private $cod_cli;
        private $nome;
        private $telefone;
        private $endereco;
        private $cidade;
        private $cep;
        private $uf;
        private $pais;
        
        function _construct($name, $telefone, $endereco, $cidade, $cep, $uf, $pais ) {
            $this->name = $name;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->cep = $cep;
            $this->uf = $uf;
            $this->pais = $pais;
        }
        
        //criando funçoes "GET" "SET"
        
        function get_cod_cli() {
            return $this->cod_cli;
        }
        
        function set_nome($nome) {
            $this->name -> $name;
        }

        function set_telefone($telefone) {
            $this->telefone -> $telefone;
        }
        
        function set_endereco($endereco) {
            $this->endereco -> $endereco;
        }

        function set_cidade($cidade) {
            $this->cidade -> $cidade;
        }

        function set_cep($cep) {
            $this->cep -> $cep;
        }

        function set_uf($uf) {
            $this->uf -> $uf;
        }

        function set_pais($pais) {
            $this->pais -> $pais;
        }


    }


?>