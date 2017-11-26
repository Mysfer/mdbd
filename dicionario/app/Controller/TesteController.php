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
        $dados['significado'] = $_POST['significado'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('palavras', $dados);

        //redirecionar para a rota /consultarpalavra
        header('Location: /cadastro/palavra');    

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
        header('Location: /cadastro/dicionario');
    }   

    public function consultarpalavra()
    {
        $dicionario = [];
        $sinonimo = [];
        //conexao com banco
        $q = new QueryBuilder();

        //recebe id da palavra
        $id = $_GET['id'];

        //coleta dos dados que serão usados
        $dados = $q->selectWhere($id);

        $dicionario = $q->innerdicio($id);  

        $sinonimo = $q->sinonimo($id); 

        //devolve a pagina de consulta 
        require './app/views/cpalavra.php';
    }

    public function consultardicionario()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //recebe id da palavra
        $id = $_GET['id'];

        //coleta dos dados que serão usados
        $dados = $q->selectWhere($id);

        //devolve a pagina de consulta 
        require './app/views/cdicionario.php';
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

    public function vsinonimo()
    {
        //conexao com banco
        $q = new QueryBuilder();
        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        //chama a view        
        require './app/views/vsinonimo.php';
    }

    public function vdicionario()
    {
        //conexao com banco
        $q = new QueryBuilder();
        //busca os dados, guarda em uma var
        $dados = $q->select('palavras');
        $dados2 = $q->select('dicionario');
        //chama a view        
        require './app/views/vdicionario.php';
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
        header('Location: /vincular/sinonimo');
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
        header('Location: /vincular/dicionario');
    }
    public function pesquisar()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //recebe palavras
        $table = $_GET['table'];        
        $like = $_GET['like'];

        if($table=="palavras"){
            $nome="palavra";
        } 
        else {
            $nome="nome";
        }

        //coleta dos dados que serão usados
        $dados = $q->search($table,$nome,$like);

        //devolve a pagina de consulta 
        require './app/views/resultados.php';
    }
    public function feedback()
    {
        header('location: /faleconosco');
    }
}
