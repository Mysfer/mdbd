<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>score</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    </head>
    <body>
        <h1>Você venceu!</h1>
        <h3>numero de tentativas: <?= $_SESSION['tentativas']; ?></h3>
        <form method="post" action="/score">        
        <button class="btn btn-success btn-lg" type="">Salvar pontuação</button>
        <form>
        <table class="table table-striped">
        <thead>
        
            <tr>
                <th>Nome</th>
                <th>tentativas</th>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $d) { ?>
            <tr>
                <td><?= $d['nome'] ?></td>
                <td><?= $d['tentativas'] ?></td>
                
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    </body>
</html>
