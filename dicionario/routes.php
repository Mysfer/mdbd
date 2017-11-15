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

    case '/vincular/sinonimo':
        $testeController->vsinonimo();
        break;

    case '/vincular/dicionario':
        $testeController->vdicionario();
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

    case '/consultar/palavra':
        $testeController->consultarpalavra();
        break;
    
    case '/consultar/dicionario':
        $testeController->consultardicionario();
        break;

    case '/faleconosco':        
        require './app/views/faleconosco.php';
        break;

    case '/pesquisar':
        $testeController->pesquisar();
        break;

    default:
        require './app/views/error.html'; 
        break;
}
