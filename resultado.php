<?php
$salario = str_replace(",", ".", (str_replace(".", "", $_POST['salariobruto'])));
include './class/Inss.class.php';
include './class/Ir.class.php';

//INSS
$inss = new Inss();
$inss = $inss->Calculo($salario);
if ($salario < 4663.76) {
    $deducaoinss = $salario * ($inss[0] / 100);
} else {
    $deducaoinss = 4663.76 * ($inss[0] / 100);
}

$descontadoinss = $salario - $deducaoinss;

//Imposto de Renda
$imposto = new Imposto();
$imposto = $imposto->Calculo($descontadoinss);
$deducaoir = ($descontadoinss * ($imposto[0] / 100)) - $imposto[1];
?>
<html>
    <head>
        <title>Cálculo de Imposto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="libs/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="libs/js/jquery.js" type="text/javascript"></script>
        <script src="libs/js/jquery.maskMoney.js" type="text/javascript"></script>
        <script src="libs/js/script.js" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $('html, body').animate({ 'scrollTop' : $(document).height() }, 'slow');
            });
        </script>
    </head>
    <body>
        <div id="header" class="page-header">
            <h1>Trabalho disciplina Desenvolvimento Web I</h1>
        </div>
        <div class="wrapper" role="main" id="principal">
            <div class="container">
                <div class="row">
                    <div id="conteudo" class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="./libs/images/dinheiro1.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Cálculo Salário</h2>
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
         <div class="wrapper" role="main" id="principal">
            <div class="container">
                <div class="row">
                    <div id="conteudo" class="col-md-9">
                        <div class="row">
                            <div class="col-md-8">
                                <br>
                            </div>
                        </div><!-- div row conteudo -->
                    </div><!-- div conteudo -->			
                </div><!-- div row container -->
            </div><!-- div container -->
        </div><!-- div wrapper -->
        <div class="wrapper" role="main" id="resultado">
            <div class="container">
                <div class="row">
                    <div id="conteudo" class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="./libs/images/leao-ir.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2>Resultado</h2>
                                <table class="table table-striped">
                                    <tr>
                                        <td>Evento</td>
                                        <td>Ref.</td>
                                        <td>Proventos</td>
                                        <td>Descontos</td>
                                    </tr>
                                    <tr>
                                        <td>Salário Bruto</td>
                                        <td> - </td>
                                        <td><?php echo 'R$ ' . number_format($salario , 2, ',', '.'); ?></td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>INSS</td>
                                        <td><?php if ($inss[1] == "TETO"){
                                                             echo $inss[1] ;
                                                        } else {
                                                            echo $inss[0]."%";}?></td>
                                        <td> - </td>
                                        <td><?php echo 'R$ ' . number_format($deducaoinss , 2, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>IRPF</td>
                                        <td><?php echo $imposto[0]."%" ?></td>
                                        <td> - </td>
                                        <td><?php echo 'R$ ' . number_format($deducaoir , 2, ',', '.');  ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Totais</td>
                                        <td><?php echo 'R$ ' . number_format($salario , 2, ',', '.'); ?></td>
                                        <td><?php echo 'R$ ' . number_format(($deducaoinss + $deducaoir)  , 2, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Salário Líquido</td>
                                        <td colspan="2"><?php echo 'R$ ' . number_format(($salario - ($deducaoinss + $deducaoir)) , 2, ',', '.'); ?></td>
                                    </tr>
                                </table>
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