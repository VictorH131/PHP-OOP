<?php

    class fornecedores {
        private $cod_fornecedor;
        private $cod_empresa;
        private $cargo_contato;
        private $nome_contato;
        private $telefone;
        private $endereco;
        private $cidade;
        private $cep;
        private $uf;
        private $pais;

        
        function _construct($cod_fornecedor, $nome_contato, $telefone, $endereco, $cidade, $cep, $uf, $pais ) {
            $this->cargo_contato =$cargo_contato;
            $this->name_contato = $name_contato;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->cep = $cep;
            $this->uf = $uf;
            $this->pais = $pais;
        }

         //criando funçoes "GET" "SET"
        
        function get_cod_fornecedor() {
            return $this->$cod_fornecedor;
        }
        
        function get_cod_empresa() {
            return $this->$cod_empresa;
        }
        
        function set_cargo_contato($cargo_contato) {
            $this->cargo_contato -> $cargo_contato;
        }

        function set_nome_contato($nome_contato) {
            $this->nome_contato -> $nome_contato;
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

        function set_pais($pais) {
            $this->pais -> $pais;
        }

        function set_cep($cep) {
            $this->cep -> $cep;
        }
        
        function set_uf($uf) {
            $this->uf -> $uf;
        }

    }