<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

    public function start()
    {
        session_start();
        $_SESSION['nome'] =  isset($_POST['nome']) ? $_POST['nome'] : 'Guest'; 
        $_SESSION['numero'] = rand(0,100);
        $_SESSION['tentativas'] = 0;
        header('Location: /jogo');
    }

    public function jogo()
    {
        session_start();
        if(isset($_POST['chute'])){
            
            if($_SESSION['numero'] == $_POST['chute']) {
                header('location: /venceu');
            }
            else if ($_SESSION['numero'] < $_POST['chute']){
                $mensagem = "o numero é menor";
                $_SESSION['tentativas']++;
            }
            else if ($_SESSION['numero'] > $_POST['chute']){
                $mensagem = "o numero é maior";
                $_SESSION['tentativas']++;
            }
        }
        else {
            $mensagem = '';
        }
        
        require './app/views/jogo.php';
        
    }

    public function venceu()
    {
        
        $q = new QueryBuilder();
        
        $dados = $q->select('score');
        
        require './app/views/venceu.php';

    }

    public function score()
    {
        session_start();
        $dados['nome'] = $_SESSION['nome'];
        $dados['tentativas'] = $_SESSION['tentativas'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('score', $dados);

        header('Location: /venceu');
    }

    public function salvar()
    {
        //receber os dados
        $dados['nome'] = $_POST['nome'];
        $dados['idade'] = $_POST['idade'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('alunos', $dados);

        //devolver uma pagina com mensagem de ok
        // require './app/views/foi.php';

        //redirecionar para a rota /cadastro
        header('Location: /cadastro');
        
        
    }

    public function consultar()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('alunos');
        //chama a view
        require './app/views/consultar.php';

    }
    
}
