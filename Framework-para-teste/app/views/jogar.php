<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <title>Jogar</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1 class="page-header">Digite seu nome e comece a jogar!</h1>

                <form method="post" action="/start">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="">
                    </div>                   

                    <button class="btn btn-success btn-lg" type="">Jogar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>