<?php

    class Produto {
        private $cod_produto;
        private $Nome_produto;
        private $cod_fornecedor;
        private $cod_categoria;
        private $quant_uni;
        private $uni_estoque;
        private $uni_pedidas;
        private $nivel_estoque;
        private $descontinuado;



        function _construct($Nome_produto, $quant_uni, $uni_estoque, $uni_pedidas, $nivel_estoque, $descontinuado ) {
                $this->Nome_produto = $Nome_produto;
                $this->quant_uni = $quant_uni;
                $this->uni_estoque = $uni_estoque;
                $this->uni_pedidas = $uni_pedidas;
                $this->nivel_estoque = $nivel_estoque;
                $this->descontinuado = $descontinuado; 
        }
    }