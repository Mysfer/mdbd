<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {

    case '/':
        
        $testeController->index();
        break;

    case '/cadastro/palavra':
        
        require './app/views/cadpalavra.php';
        break;

    case '/salvarpalavra':
        
        $testeController->salvarpalavra();
        break;  

    case '/cadastro/significado':
        
        require './app/views/cadsignificado.php';
        break;
    
    case '/salvarsignificado':
        
        $testeController->salvarsignificado();
        break;  

    default:
        require './app/views/error.html'; 
        break;
}