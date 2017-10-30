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

    public function consultar()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view
        //require './app/views/consultar.php';
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

    public function linkarsinonimo()
    {
        //receber os dados
        $dados['palavras_id'] = $_POST['id'];
        $dados['palavras_id1'] = $_POST['id2'];    
    
        //conectar com o banco
        $q = new QueryBuilder();
    
        //enviar os dados para o banco
        $q->insert('sinonimo', $dados);
    
        //redirecionar
        header('Location: /link/sinonimo');
    }

    public function linkardicionario()
    {
        //receber os dados
        $dados['table1_id_dicionario'] = $_POST['id2'];
        $dados['palavras_id'] = $_POST['id'];    
    
        //conectar com o banco
        $q = new QueryBuilder();
    
        //enviar os dados para o banco
        $q->insert('pertence', $dados);
    
        //redirecionar
        header('Location: /link/dicionario');
    }




}
