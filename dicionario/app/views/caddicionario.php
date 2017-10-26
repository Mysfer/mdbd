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

                <form method="post" action="/salvardicionario">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="">
                    </div>

                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input class="form-control" type="text" name="autor" value="">
                    </div>

                    <div class="form-group">
                        <label for="editora">Editora</label>
                        <input class="form-control" type="text" name="editora" value="">
                    </div>

                    <button class="btn" type="">Enviar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>