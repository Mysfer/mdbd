<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/foundation.css">
    </head>
    <body>    
        <nav class="foundation-bar h3">
            <ul>
                <li><a href="/">Index</a></li>
                <li><a href="/cadastro/palavra">Cadastrar Palavra</a></li>
                <li><a href="/cadastro/palavra">Cadastrar Palavra</a></li>
                <li><a href="/cadastro/dicionario">Cadastrar Dicionario</a></li>
                <li><a href="/link/sinonimo">Linkar Sinonimo</a></li>
                <li><a href="/link/dicionario">Linkar Dicionario</a></a></li>
                <li><a href="/faleconosco">Fale conosco</a></li>
                
            </ul>
        </nav>
            <?php foreach($dados as $d) { ?>
                
                <li><a href="/consultar?id=<?= $d['id'] ?>"><?= $d['palavra'] ?></a></li>

            <?php  } ?>
        </ul>
    </body>
</html>