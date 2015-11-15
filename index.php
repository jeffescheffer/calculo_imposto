<html>
    <head>
        <title>Cálculo de Impostoo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="libs/js/jquery.js" type="text/javascript"></script>
        <script src="libs/js/jquery.maskMoney.js" type="text/javascript"></script>
        <script src="libs/js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="header" class="page-header">
            <h1>Trabalho disciplina Desenvolvimento Web I</h1>
        </div>
        <div class="wrapper" role="main">
            <div class="container">
                <div class="row">
                    <div id="conteudo" class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="./libs/images/dinheiro1.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Cálculo Imposto</h2>
                                <form action="resultado.php" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control" id="salariobruto" name="salariobruto" placeholder="Salário Bruto">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Calcular</button>
                                </form>
                            </div>
                        </div><!-- div row conteudo -->
                    </div><!-- div conteudo -->			
                </div><!-- div row container -->
            </div><!-- div container -->
        </div><!-- div wrapper -->
        <footer> <!-- Aqui e a area do footer -->
            <div class="container">
                <div class="row">     
                        <h1>Trabalho disciplina Desenvolvimento Web I</h1>
                </div>
            </div>
        </footer>
    </body>
</html>