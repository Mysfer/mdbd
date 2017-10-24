<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {

    case '/':
        
        $testeController->index();
        break;

    case '/template':

        require './app/views/template.html';
        break;

    case '/cadastro/palavra':
        
        require './app/views/cadpalavra.php';
        break;

    case '/salvarpalavra': 
        $testeController->salvarpalavra();
        break;  

    case '/link/significado':  
        require './app/views/linksignificado.php';
        break;
    
    case '/salvarsignificado':
        $testeController->salvarsignificado();
        break; 

    case '/consultar/significado':
        $testeController->consultarsignificado();
        break; 

    case '/cadastrar/dicionario':
        require './app/views/caddicionario.php';
        break;

    case '/salvardicionario':
        $testeController->salvardicionario();
        break;

     case '/link/sinonimo':
        require './app/views/linksinonimo.php';
        break;

    case '/linksinonimo':
        $testeController->linksinonimo();
        break;

    case '/consultar':
        $testeController->consultar();
        break;

    default:
        require './app/views/error.html'; 
        break;
}
