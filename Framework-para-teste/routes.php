<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {

    case '/':
        
        require './app/views/home.php';
        break;

    case '/cadastrarpalavra':
        
        require './app/views/cadastrarpalavra.php';
        break;  
    
    
    case '/consultarpalavra':
            
        $testeController->consultarpalavra();
        break;

    default:
        require './app/views/error.html'; 
        break;
}
