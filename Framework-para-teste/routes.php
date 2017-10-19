<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {


    case '/cadastro':
        
        require './app/views/cadastro.php';
        break;
    
    case '/jogar':
        
        require './app/views/jogar.php';        
        break;

        case '/start':
        
        $testeController->start();
        break;
    
    case '/jogo':
        
        $testeController->jogo();      
        break; 

    case '/venceu':
        
        $testeController->venceu();        
        break;

    case '/score':
           
        $testeController->score();
        break;
    
    
    case '/salvar':
           
        $testeController->salvar();
        break;
    
    case '/consultar':
            
        $testeController->consultar();
        break;

    default:
        require './app/views/error.html'; 
        break;
}
