<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/public/css/foundation.css">
        <link rel="stylesheet" href="/public/css/app.css">
    <title>Página de cadastro</title>
</head>

<body>
    <!-- logotipo e cabeçalho -->
        <header>
            <div class='grid-x grid-margin-x'>
                <div class="large-8 medium-6 small-3 cell">
                    <a href="/"><img src="/public/images/logo.png" width="150px"/></a>
                </div>
                <div class="large-4 medium-6 small-9 cell">
                    <form action="/pesquisar">
                        <ul class="menu">                            
                            <li>
                                <input type="text" name="like" placeholder="Palavra">
                            </li>
                            <li>                                
                                <input type="submit" class="button" value="Pesquisar"/>
                            </li>
                            <li> 
                                <select name="table">
                                    <option value="palavras">Palavras</option>
                                    <option value="dicionario">Dicionários</option>
                                </select>
                            </li>                            
                        </ul> 
                    </form>                  
                </div>
            </div>
        </header>
        <!-- corpo do site -->
        <section class='grid-x grid-padding-x'>
            <!-- parte variante -->
            <div class="large-9 medium-9 small-7 cell">
                <h3>Cadastre dicionários:</h3>
                <form method="post" action="/salvardicionario">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="input-group-field" type="text" name="nome" id="nome" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input class="input-group-field" type="text" name="autor" value="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="editora">Editora</label>
                        <input class="input-group-field" type="text" name="editora" value="">
                    </div>
                    <br>
                    <div class="text-right">
                    <button class="success button" type="">Enviar</button>
                    </div>
                </form>
            </div>
            <!-- barra vertical lateral -->
                <div class="large-3 medium-3 small-5 cell left-border">
                    <div class="vertical menu align-center h4">
                        <div><a href="/">Home</a></div>
                        <div><a href="/cadastro/palavra">Cadastrar Palavra</a></div>                 
                        <div><a href="/cadastro/dicionario">Cadastrar Dicionario</a></div>
                        <div><a href="/vincular/sinonimo">Vincular Sinonimo</a></div>
                        <div><a href="/vincular/dicionario">Vincular Dicionario</a></div>
                        <div><a href="/faleconosco">Fale conosco</a></div>
                    </div>
                </div>
            </div>                
        </section>
        <!-- rodapé -->
        <footer>
            <div class='grid-x grid-padding-x'>
                <div class="large-6 medium-6 small-5 cell">                
                    <h2>Sobre o Dicionline:</h2>
                    <h5>Esse site, o Dicionline, no início era apenas um projeto de banco de dados que tinha como objetivo armazenar dados
                        de dicionários e palavras. A equipe decidiu subir um site que inserisse dados no nosso banco para que
                        pudéssemos testá-lo, e o nosso brilhante líder <strike>João Pedro</strike> Paulo Henrique teve a idéia de desenvolver
                        essa obra prima que hoje é acessada por milhões de usuários todos os dias.
                    </h5>
                </div>
                <div class="large-6 medium-6 small-7 cell">                   
                    <h2>Nossa equipe:</h2>
                    <div class="grid-x dark-background">
                        <div class="large-4 medium-8 small-12">
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Paulo Henrique Schiavetti</a>
                        </div>
                        <div class="large-4 medium-8 small-12">
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>João Pedro Freitas</a>
                        </div>
                        <div class="large-4 medium-8 small-12">
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Bárbara Tavares</a>
                        </div>
                        <div class="large-4 medium-8 small-12">
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Larissa Adriana</a>
                        </div>
                        <div class="large-4 medium-8 small-12">
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Vitor Francisco</a>
                        </div>
                        <div class="large-4 medium-8 small-12">
                            <a><img src="/public/images/paulo.jpg" class="rounded"/>Letícya Barbosa</a>
                        </div>
                    </div>                   
                </div>
            </div>
        </footer>
    
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>

</html>