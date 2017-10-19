<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <title>Jogo</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1 class="page-header">chute um número!</h1>

                <form method="post" action="/jogo">
                    <?= "<p>".$mensagem."<p>" ?>
                    <div class="form-group">
                        <label for="nome">chute</label>
                        <input class="form-control" type="text" name="chute" value="">
                    </div>                   

                    <button class="btn btn-success btn-lg" type="">chutar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>