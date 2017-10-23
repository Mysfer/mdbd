<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/foundation.css">
    <title>Página de cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1 class="page-header">Página de cadastro</h1>

                <form method="post" action="/cadastrarpalavra-salvar">

                    <div class="form-group">
                        <label for="palavra">Palavra</label>
                        <input class="form-control" type="text" name="palavra" id="palavra" value="">
                    </div>

                    <div class="form-group">
                        <label for="idade">Pronúncia</label>
                        <input class="form-control" type="text" name="pronuncia" value="">
                    </div>

                    <div class="form-group">
                        <label for="idade">Origem</label>
                        <input class="form-control" type="text" name="origem" value="">
                    </div>

                    <button class="btn btn-success btn-lg" type="">Enviar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>