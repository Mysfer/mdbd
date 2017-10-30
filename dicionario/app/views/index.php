<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/foundation.css">
    </head>
    <body>
        <navbar class="top-bar foundation-bar h4">
            <nav>
                <a href="/">Index</a>
            </nav>
            <nav>
                <a href="/cadastro/palavra">Cadastrar Palavra</a>
            </nav>
            <nav>
                <a href="/cadastro/dicionario">Cadastrar Dicionario</a>
            </nav>
            <nav>
                <a href="/link/significado">Linkar Significado</a>
            </nav>
            <nav>
                <a href="/link/sinonimo">Linkar Sinonimo</a>
            </nav>
            <nav>
                <a href="/link/dicionario">Linkar Dicionario</a>
            </nav>
            <nav>          
                <a href="/faleconosco">Fale conosco</a>
            </nav>
        </navbar>
        <ul class="h5">
            <?php foreach($dados as $d) { ?>
                
                <li><a href="/consultar?id=<?= $d['id'] ?>"><?= $d['palavra'] ?></a></li>

            <?php  } ?>
        </ul>
    </body>
</html>