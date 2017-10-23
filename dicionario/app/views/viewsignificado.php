<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="/public/css/foundation.css">
    </head>
    <body>
        <ul>
            <?php foreach($dados as $d) { ?>
                
                <li><a ><?= $d['significado'] ?></a></li>

            <?php  } ?>
        </ul>
    </body>
</html>