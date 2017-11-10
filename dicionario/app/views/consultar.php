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
    <!-- logotipo e cabeçalho -->
        <header class="large-12 cell">
            <img src="/public/images/logo.png"/>
        </header>
        <!-- corpo do site -->
        <section class='grid-x grid-padding-x'>
            <!-- parte variante -->
            <div class="large-9 medium-9 small-9 cell">
                <table class="table table-striped">
                    <thead>
                    
                        <tr>                
                            <th>Palavra</th>                
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>                
                            <td><?= $dados['palavra'] ?></td>                
                        </tr>            
                    </tbody>
                    <thead>
                        <tr>
                            <th>Pronúncia</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>                
                            <td><?= $dados['pronuncia'] ?></td>                                               
                        </tr>            
                    </tbody>
                    <thead>
                        <tr>                
                            <th>Origem(etimologia)</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>                
                            <td><?= $dados['origem'] ?></td>                             
                        </tr>                    
                    </tbody>
                    <thead>
                        <tr>
                            <th>Significado</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>
                            <td><?= $dados['significado'] ?></td>              
                        </tr>            
                    </tbody>
                    <thead>
                        <tr>
                            <th>Dicionario</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>                            
                            <td><?= $dicionario['nome'] ?></td>
                        </tr>            
                    </tbody>
                    <thead>
                        <tr>
                            <th>Sinonimos</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>
                            <td><?= $sinonimos['nome'] ?></td>                
                        </tr>            
                    </tbody>
                </table>
            </div>
            <!-- barra vertical lateral -->
            <div class="large-3 medium-3 small-3 cell">
                <div class="icon-bar vertical six-up h3">
                    <a href="/"><li>Home</li></a>
                    <a href="/cadastro/palavra"><li>Cadastrar Palavra</li></a>                    
                    <a href="/cadastro/dicionario"><li>Cadastrar Dicionario</li></a>
                    <a href="/vincular/sinonimo"><li>Vincular Sinonimo</li></a>
                    <a href="/vincular/dicionario"><li>Vincular Dicionario</li></a>
                    <a href="/faleconosco"><li>Fale conosco</li></a>
                </div>
            </div>
        </section>
    
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>
</html>