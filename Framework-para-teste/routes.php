<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {

    case '/':
        
        $testeController->index();
        break;

    case '/cadpalavra':
        
        require './app/views/cadpalavra.php';
        break;

    case '/salvarpalavra':
        
        $testeController->salvarpalavra();
        break;  
    

    default:
        require './app/views/error.html'; 
        break;
}
