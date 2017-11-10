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
        <header class="large-12 medium-12 small-12 cell">
            <img src="/public/images/logo.png"/>
        </header>
        <!-- corpo do site -->
        <section class='grid-x grid-padding-x'>
            <!-- parte variante -->
            <div class="large-9 medium-9 small-9 cell">
                <h3>Cadastre dicionários:</h3>
                <form method="post" action="/salvardicionario">
                    <div class="input-group">
                        <label for="nome">Nome</label>
                        <input class="input-group-field" type="text" name="nome" id="nome" value="">
                    </div>

                    <div class="input-group">
                        <label for="autor">Autor</label>
                        <input class="input-group-field" type="text" name="autor" value="">
                    </div>

                    <div class="input-group">
                        <label for="editora">Editora</label>
                        <input class="input-group-field" type="text" name="editora" value="">
                    </div>
                    <button class="success button" type="">Enviar</button>
                </form>
            </div>
            <!-- barra vertical lateral -->
            <div class="large-3 medium-3 small-3 cell">
                <div class="icon-bar vertical six-up h3">
                    <a href="/"><li>Home</li></a>
                    <a href="/cadastro/palavra"><li>Cadastrar Palavra</li></a>                    
                    <a href="/cadastro/dicionario"><li>Cadastrar Dicionario</li></a>
                    <a href="/vincular/sinonimo"><li>Vincular Sinonimo</li></a>
                    <a href="/vincular/dicionario"><li>Vincular Dicionario</li></a>
                    <a href="/faleconosco"><li>Fale conosco</li></a>
                </div>
            </div>
        </section>
    
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>

</html>