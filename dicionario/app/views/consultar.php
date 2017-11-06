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
                <th>Pronúncia</th>
                <th>Origem(etimologia)</th>
                <th>Significado</th>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $d) { ?>
            <tr>
                
                <td><?= $d['palavra'] ?></td>
                <td><?= $d['pronuncia'] ?></td>
                <td><?= $d['origem'] ?></td>
                <td><?= $d['significado'] ?></td>
                
            </tr>
            <?php  } ?>
        </tbody>
    </table>
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>
</html>