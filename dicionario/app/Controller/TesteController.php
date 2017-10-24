<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

    public function salvarpalavra()
    {
        //receber os dados
        $dados['palavra'] = $_POST['palavra'];
        $dados['pronuncia'] = $_POST['pronuncia'];
        $dados['origem'] = $_POST['origem'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('palavras', $dados);

        //redirecionar para a rota /consultarpalavra
        header('Location: /consultarpalavra');    

    }

    public function consultarpalavra()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view
        require './app/views/consultar.php';

    }
    
    public function index()
    {

        //criação da variavel

        $dados = [];

        //conexão com o banco

         $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');

         //chama a view
        require './app/views/index.php';
    }

    public function salvarsignificado()
    {
        //receber os dados
        $dados['significado'] = $_POST['significado'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('significado', $dados);

        //redirecionar para a rota /consultarpalavra
        header('Location: /');

    }

    public function consultarsignificado()
        {

            //criação da variavel

            $dados = [];

            //conexão com o banco

            $q = new QueryBuilder();

            //busca os dados, guarda em uma var
            $dados = $q->select('significado');

            //chama a view
            require './app/views/viewsignificado.php';
    }

    public function salvardicionario()
    {
        //receber os dados
        $dados['nome'] = $_POST['nome'];
        $dados['autor'] = $_POST['autor'];
        $dados['editora'] = $_POST['editora'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('dicionario', $dados);

        //devolve a pagina cadastrar dicionario
        header('Location: /cadastrar/dicionario');
    }



}
