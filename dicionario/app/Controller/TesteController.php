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

    public function consultar()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view
        //require './app/views/consultar.php';
        require './app/views/linksignificado.php';

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

    public function linksinonimo()
    {
        //conexao com banco
        $q = new QueryBuilder();
        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view        
        require './app/views/linksinonimo.php';
    }

    public function linkdicionario()
    {
        //conexao com banco
        $q = new QueryBuilder();
        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view        
        require './app/views/linkdicionario.php';
    }

    //public function linkarsinonimo()
    //{
    //    //receber os dados
    //    $dados['id'] = $_POST['id'];
    //
    //    //conectar com o banco
    //    $q = new QueryBuilder();
    //
    //    //enviar os dados para o banco
    //    $q->insert('id', $dados);
    //
    //    //redirecionar
    //    header('Location: /');
    //}

    //public function linkardicionario()
    //{

    //}

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
