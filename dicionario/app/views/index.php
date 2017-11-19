<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/foundation.css">
        <link rel="stylesheet" href="/public/css/app.css">
        <link rel="shortcut icon" href="public/images/faviconn.ico" type="image/x-icon">
    </head>
    <body>
        <!-- logotipo e cabeçalho -->
        <header>
            <div class="cell large-12 medium-12 small-12">
                <ul class="menu expanded">
                    <li>
                        <img src="/public/images/logo.png" width="200px"/>
                    </li>
                    <li>
                        <form action="/pesquisar">
                            <input type="search" name="like" />
                            <input type="hidden" name="table" value="palavras"/>
                            <input type="hidden" name="nome" value="palavra"/>
                            <input class="button" type="submit" value="pesquisar"/>
                        </form>
                    </li>
            </div>
        </header>
        <!-- corpo do site -->
        <section class='grid-x grid-padding-x'>
            <!-- parte variante -->
            <div class="large-9 medium-9 small-9 cell">
                <h2>Sugestões:</h2>
                <ul class="h5">
                    <?php foreach($dados as $d) { ?>
                    <li>                        
                        <a href="/consultar/palavra?id=<?= $d['id'] ?>" class="button">
                        <?= $d['palavra']?>
                        </a>
                    </li>
                    <?php  } ?>
                </ul>
            </div>
            <!-- barra vertical lateral -->
            <div class="large-3 medium-3 small-3 cell light-background">
                <ul class="vertical menu align-center h3">
                    <li><a href="/">Home</a></li>
                    <li><a href="/cadastro/palavra">Cadastrar Palavra</a></li>                 
                    <li><a href="/cadastro/dicionario">Cadastrar Dicionario</a></li>
                    <li><a href="/vincular/sinonimo">Vincular Sinonimo</a></li>
                    <li><a href="/vincular/dicionario">Vincular Dicionario</a></li>
                    <li><a href="/faleconosco">Fale conosco</a></li>
                </ul>
            </div>                
        </section>
        <!-- rodapé -->
        <footer>
            <div class='grid-x grid-padding-x'>
                <div class="large-12 medium-12 small-12 cell">                
                    <h2>Sobre o Dicionline:</h2>
                    <h5>Esse site, o Dicionline, no início era apenas um projeto de banco de dados que tinha como objetivo armazenar dados
                        de dicionários e palavras. A equipe decidiu subir um site que inserisse dados no nosso banco para que
                        pudéssemos testá-lo, e o nosso brilhante líder <strike>João Pedro</strike> Paulo Henrique teve a idéia de desenvolver
                        essa obra prima que hoje é acessada por milhões de usuários todos os dias.
                    </h5>                    
                    <h2>Nossa equipe:</h2>
                    <ul class="menu h4 dark-background">
                        <li>
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Paulo henrique Schiavetti</a>
                        </li>
                        <li>
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>João Pedro Freitas</a>
                        </li>
                        <li>
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Bárbara Tavares</a>
                        </li>
                        <li>
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Larissa Adriana</a>
                        </li>
                        <li>
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Vitor Francisco</a>
                        </li>
                        <li>
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Letícya Barbosa</a>
                        </li>
                    </ul>                   
                </div>
            </div>
        </footer>

        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>

    </body>
</html>