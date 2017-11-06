<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/public/css/foundation.css">
        <link rel="stylesheet" href="class="input-group"/public/css/app.css">
    <title>Página de cadastro</title>
</head>

<body>

    <div class="grid-x grid-padding-x">
            <div class="large-6 medium-6 cell">

                <h1 class="page-header">Página de cadastro</h1>

                <form method="post" action="/salvarpalavra">

                    <div class="input-group">
                        <label for="palavra">Palavra</label>
                        <input class="input-group-field" type="text" name="palavra" id="palavra" value="">
                    </div>

                    <div class="input-group">
                        <label for="pronuncia">Pronúncia</label>
                        <input class="input-group-field" type="text" name="pronuncia" value="">
                    </div>

                    <div class="input-group">
                        <label for="origem">Origem</label>
                        <input class="input-group-field" type="text" name="origem" value="">
                    </div>

                    <div class="input-group">
                        <label for="significado">Significado</label>
                        <textarea name="significado" rows="4" cols="10"></textarea>
                    </div>

                    <button class="success button" type="">Enviar</button>
                </form>
            </div>
    </div>
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>

</html>