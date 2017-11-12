<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/foundation.css">
        <link rel="stylesheet" href="/public/css/app.css">
    </head>
    <body>
        <!-- logotipo e cabeçalho -->
        <header class="large-12 medium-12 small-12">
            <div class="cell">
                <img src="/public/images/logo.png"/>
            </div>
        </header>
        <!-- corpo do site -->
        <section class='grid-x grid-padding-x'>
            <!-- parte variante -->
            <div class="large-9 medium-9 small-9 cell">
                <h2>Sugestões:</h2>
                <ul class="h5">
                    <?php foreach($dados as $d) { ?>
                        
                        <a href="/consultar/palavra?id=<?= $d['id'] ?>"><li><?= $d['palavra'] ?></li></a>

                    <?php  } ?>
                </ul>
            </div>
            <!-- barra vertical lateral -->
            <div class="large-3 medium-3 small-3 cell lateral-cell">
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
        <!-- rodapé -->
        <footer class="large-12 medium-12 small-12">
            <h1>Zawarudo!</h1>
        </footer>

        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>

    </body>
</html>