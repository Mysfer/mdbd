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
        <header>
            <h1>Dicionline Emira</h1>
        </header>
        <section class='grid-x grid-padding-x'>

            <div class="large-8 medium-8 cell">
                <h2>Sugestões:</h2>
                <ul class="h5">
                    <?php foreach($dados as $d) { ?>
                        
                        <li><a href="/consultar?id=<?= $d['id'] ?>"><?= $d['palavra'] ?></a></li>

                    <?php  } ?>
                </ul>
            </div>

            <div class="large-2 medium-2 cell h3">
                <nav>
                    <ul>
                        <li><a href="/">Index</a></li>
                        <li><a href="/cadastro/palavra">Cadastrar Palavra</a></li>                    
                        <li><a href="/cadastro/dicionario">Cadastrar Dicionario</a></li>
                        <li><a href="/link/sinonimo">Linkar Sinonimo</a></li>
                        <li><a href="/link/dicionario">Linkar Dicionario</a></a></li>
                        <li><a href="/faleconosco">Fale conosco</a></li>
                    </ul>
                </nav>
            </div>

        </section>

        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>

    </body>
</html>