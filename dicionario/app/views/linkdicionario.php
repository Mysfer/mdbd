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

    <div class="grid-x grid-padding-x">
            <div class="large-12 cell">

                <h1 class="page-header">Página de cadastro</h1>

                <form method="post" action="/linkardicionario">

                    <div class="form-group">
                        <label for="palavra">Palavra a ser linkada:</label>
                        <select name="id" id="">
                            <?php foreach($dados as $d) { ?>
                            <option value="<?= $d['id'] ?>"><?= $d['palavra'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sinonimo">Sinonimo</label>
                        <select name="id2" id="">
                            <?php foreach($dados as $d) { ?>
                            <option value="<?= $d['id'] ?>"><?= $d['palavra'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <input class="success button" type="submit" value="Enviar"/>
                </form>
            </div>
    </div>
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>

</body>

</html>