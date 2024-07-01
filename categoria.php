<?php

    class codigoCategoria {
        private $cod_categiria;
        private $nomecategoria;
        private $descricao;
        private $figura;
        
        
        function _construct($nomecategoria, $descricao, $figura) {
            $this->nomecategoria; = $nomecategoria;;
            $this->descricao = $descricao;
            $this->figura = $figura;
        }

        //criando funçoes "GET" "SET"
        
        function get_cod_categiria() {
            return $this->$cod_categiria;
        }
        
        function set_nomecategoria($nomecategoria) {
            $this->nomecategoria -> $nomecategoria;
        }

        function set_descricao($descricao) {
            $this->descricao -> $$descricao;
        }

        function set_figura($figura) {
            $this->figura -> $figura;
        }

    }