<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">

    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
        
            <tr>
                
                <th>Nome</th>
                <th>Pronúncia</th>
                <th>Origem(etimologia)</th>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $d) { ?>
            <tr>
                
                <td><?= $d['palavra'] ?></td>
                <td><?= $d['pronuncia'] ?></td>
                <td><?= $d['origem'] ?></td>
                
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</body>
</html>