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
        <header class="large-12 medium-12 small-12">
            <div class="cell">
                <img src="/public/images/logo.png"/>
            </div>
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
                            <td>
                            <?php foreach($dicionario as $a){ ?>
                            <?= $a['nome'] ?>
                            </td>
                            <?php }?>
                        </tr>            
                    </tbody>
                    <thead>
                        <tr>
                            <th>Sinonimos</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>
                        <td>
                        <?php foreach ($sinonimo as $s){ ?>
                            <a href="/consultar/palavra?id=<?= $s['id'] ?>"><?= $s['palavra'] ?><br>
                        <?php }?>
                        </td>
                        </tr>            
                    </tbody>
                </table>
            </div>
            <!-- barra vertical lateral -->
            <div class="large-3 medium-3 small-3 cell lateral-cell">
                <ul class="vertical menu align-center h3">
                    <li><a href="/">Home</a></li>
                    <li><a href="/cadastro/palavra">Cadastrar Palavra</a></li>                 
                    <li><a href="/cadastro/dicionario">Cadastrar Dicionario</a></li>
                    <li><a href="/vincular/sinonimo">Vincular Sinonimo</a></li>
                    <li><a href="/vincular/dicionario">Vincular Dicionario</a></li>
                    <li><a href="/faleconosco">Fale conosco</a></li>
                </ul>
            </div>                
        </section>
        <!-- rodapé -->
        <footer>
            <div class='grid-x grid-padding-x'>
                <div class="large-12 medium-12 small-12 cell">                
                    <h2>Sobre o Dicionline:</h2>
                    <h5>Esse site, o Dicionline, no início era apenas um projeto de banco de dados que tinha como objetivo armazenar dados
                        de dicionários e palavras. A equipe decidiu subir um site que inserisse dados no nosso banco para que
                        pudéssemos testá-lo, e o nosso brilhante líder <strike>João Pedro</strike> Paulo Henrique teve a idéia de desenvolver
                        essa obra prima que hoje é acessada por milhões de usuários todos os dias.
                    </h5>                    
                    <h2>Nossa equipe:</h2>
                    <ul class="menu h4">
                        <li>
                            <img src="/public/images/paulo.jpg" class="rounded"/>Paulo henrique Schiavetti
                        </li>
                        <li>
                            <img src="/public/images/paulo.jpg" class="rounded"/>João Pedro Freitas
                        </li>
                        <li>
                            <img src="/public/images/paulo.jpg" class="rounded"/>Bárbara Tavares
                        </li>
                        <li>
                            <img src="/public/images/paulo.jpg" class="rounded"/>Larissa Adriana
                        </li>
                        <li>
                            <img src="/public/images/paulo.jpg" class="rounded"/>Vitor Francisco
                        </li>
                        <li>
                            <img src="/public/images/paulo.jpg" class="rounded"/>Letícya Barbosa
                        </li>
                    </ul>                   
                </div>
            </div>
        </footer>
    
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>
</html>