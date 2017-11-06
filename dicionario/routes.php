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

    case '/cadastro/dicionario':
        
        require './app/views/caddicionario.php';
        break;

    case '/salvarpalavra': 
        $testeController->salvarpalavra();
        break;  

    case '/link/sinonimo':
        $testeController->linksinonimo();
        break;

    case '/link/dicionario':
        $testeController->linkdicionario();
        break;    

    case '/linkarsinonimo':
        $testeController->linkarsinonimo();
        break;

    case '/linkardicionario':
        $testeController->linkardicionario();
        break;
    
    case '/cadastrar/dicionario':
        require './app/views/caddicionario.php';
        break;

    case '/salvardicionario':
        $testeController->salvardicionario();
        break;  

    case '/consultar':
        $testeController->consultar();
        break;

    default:
        require './app/views/error.html'; 
        break;
}
