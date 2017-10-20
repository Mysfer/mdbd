<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

    public function consultarpalavra()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view
        require './app/views/consultarpalavra.php';

    }
    
}
