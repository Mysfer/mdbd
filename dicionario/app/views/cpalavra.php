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
        <header>
            <div class='grid-x grid-padding-x'>
                <div class="large-7 medium-6 small-3 cell">
                    <a href="/"><img src="/public/images/logo.png" width="150px"/></a>
                </div>
                <div class="large-5 medium-6 small-9 grid-y">
                    <div class="large-6 medium-3 small-0">
                    </div>
                    <div class="large-6 medium-9 small-12">
                        <form action="/pesquisar">
                            <ul class="menu">                            
                                <li>
                                    <input type="text" name="like" placeholder="Pesquisa">
                                </li>
                                <li>                                
                                    <input type="submit" class="button" value="Pesquisar"/>
                                </li>
                                <li> 
                                    <select name="table">
                                        <option value="palavras">Palavras</option>
                                        <option value="dicionario">Dicionários</option>
                                    </select>
                                </li>                            
                            </ul> 
                        </form>
                    </div>      
                </div>
            </div>
        </header>
        <!-- corpo do site -->
        <section>            
            <div class="grid-x grid-padding-x">
            <!-- parte variante -->
                <div class="large-9 medium-9 small-7 cell">
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
                                    <a href="/consultar/dicionario?id=<?= $a['id_dicionario'] ?>"><?= $a['nome'] ?><br/>                           
                                    <?php }?>
                                </td>
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
                                        <a href="/consultar/palavras?id=<?= $s['id'] ?>"><?= $s['palavra'] ?><br/>
                                    <?php }?>
                                </td>
                            </tr>            
                        </tbody>
                    </table>
                </div>
                <!-- barra vertical lateral -->
                    <div class="large-3 medium-3 small-5 cell left-border">
                        <div class="vertical menu align-center text-center h4">
                            <div><a href="/">Home</a></div>
                            <div><a href="/cadastro/palavra">Cadastrar Palavra</a></div>                 
                            <div><a href="/cadastro/dicionario">Cadastrar Dicionario</a></div>
                            <div><a href="/vincular/sinonimo">Vincular Sinonimo</a></div>
                            <div><a href="/vincular/dicionario">Vincular Dicionario</a></div>
                            <div><a href="/faleconosco">Fale conosco</a></div>
                        </div>
                    </div>
                </div>
            </div>                
        </section>
        <!-- rodapé -->
        <footer>
            <div class="grid-y grid-padding-x">
                <div class="cell large-6 medium-6 small-6 text-center">          
                <p>
                    <br>
                    © 2017-2017 DicioEmira, Inc.
                    <br>
                    (19) 3866-4907                    
                </p>
                </div>                  
                <div class="cell large-6 medium-6 small-6 grid-x h5">
                    <div class="large-3 medium-4 small-12">
                        <a><img src="/public/images/email.png" width="60px"/>E-mail</a>
                    </div>
                    <div class="large-3 medium-4 small-12">
                        <a><img src="/public/images/email.png" width="60px"/>Facebook</a>
                    </div>
                    <div class="large-3 medium-4 small-12">
                        <a><img src="/public/images/email.png" width="60px"/>Twitter</a>
                    </div>
                    <div class="large-3 medium-4 small-12">
                        <a><img src="/public/images/email.png" width="60px"/>Github</a>
                    </div>
                </div>
            </div>
        </footer>
    
        <script src="./public/js/vendor/jquery.js"></script>
        <script src="./public/js/vendor/what-input.js"></script>
        <script src="./public/js/vendor/foundation.js"></script>
        <script src="./public/js/app.js"></script>
</body>
</html>