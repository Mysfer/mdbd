<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/public/css/foundation.css">
        <link rel="stylesheet" href="/public/css/app.css">

    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
        
            <tr>                
                <th>Palavra</th>                
            </tr>
        </thead>
        <tbody>            
            <tr>                
                <td><?= $dados['palavra'] ?></td>                
            </tr>            
        </tbody>
        <thead>
            <tr>
                <th>Pronúncia</th>
            </tr>
        </thead>
        <tbody>            
            <tr>                
                <td><?= $dados['pronuncia'] ?></td>                                               
            </tr>            
        </tbody>
        <thead>
            <tr>                
                <th>Origem(etimologia)</th>
            </tr>
        </thead>
        <tbody>            
            <tr>                
                <td><?= $dados['origem'] ?></td>                             
            </tr>                    
        </tbody>
        <thead>
            <tr>
                <th>Significado</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td><?= $dados['significado'] ?></td>              
            </tr>            
        </tbody>
        <thead>
            <tr>
                <th>Dicionario</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <?php foreach($dicionario as $d) { ?>
                <td><?= $d['nome'] ?></td>
                <?php } ?>
            </tr>            
        </tbody>
        <thead>
            <tr>
                <th>Sinonimos</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td><?= $sinonimos['nome'] ?></td>                
            </tr>            
        </tbody>
    </table>
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>
</html>