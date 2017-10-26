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

                <form method="post" action="/linkarsinonimo">

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

                    <input type="submit" value="Enviar"/>
                </form>
            </div>
        </div>
    </div>


</body>

</html>