<?php
    include 'conexao/conecta_banco.php';  

      $Obj_Conexao = new CONEXAO();

      $cliente = $_GET["cliente"];

      $dados = $Obj_Conexao->Consulta("select * from Pessoa where Nome like '%".$cliente."%' order by codpessoa");

      $total = mysql_num_rows($dados);
?>

<html>
    <head>
    <title>Consulta Pessoa</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<body> 
        <div class="container">
            <div align="center" class="alert alert-info row" width="75%">
                <table align = "center"class="table table-bordered" >
                        <thead>
                            <tr>
                                <td>
                                    <div align="center"><h6><b>Código da Pessoa</b></h6></div>
                                </td>
                                <td>
                                    <div align="center"><h6><b>Nome da Pessoa</b></h6></div>
                                </td>
                                <td>
                                    <div align="center" ><h6><b>Data de Nascimento</b></h6></div>
                                </td>
                                <td>
                                    <div align="center" ><h6><b>Data de Cadastro</b></h6></div>
                                </td>
                                 <td>
                                    <div align="center" ><h6><b>Sexo</b></h6></div>
                                </td>
                            </tr>
                        </thead>
                        <?php
                         // se o número de resultados for maior que zero, mostra os dados
                if($total > 0) {
                    // inicia o loop que vai mostrar todos os dados
                    while($linha = mysql_fetch_assoc($dados)) {
                  ?>
                        <tbody>
                             <form action="AlterarPessoa.php" method="get" accept-charset="utf-8">
                            <tr style="background-color:lavenderblush;">
                                <td>
                                    <div  align="center" ><?=$linha['codpessoa']?></div>
                                    <input type="hidden" name="codpessoa" value="<?=$linha['codpessoa']?>">
                                </td>
                                <td>
                                    <div  align="center"><?=$linha['nome']?></div>
                                    <input type="hidden" name="Nome" value="<?=$linha['nome']?>">
                                </td>
                                <td>
                                    <div  align="center"><input type="date" value="<?=$linha['datanasc']?>" disabled></div>
                                    <input type="hidden" name="datanasc" value="<?=$linha['datanasc']?>">
                                </td>
                                <td>
                                    <div  align="center"><input type="date" value="<?=$linha['datacad']?>" disabled></div>
                                    <input type="hidden" name="datacad" value="<?=$linha['datacad']?>">
                                </td>
                                <td>
                                    <div  align="center"><?=$linha['sexo']?></div>
                                    <input type="hidden" name="sexo" value="<?=$linha['sexo']?>">
                                </td>
                                <td> 
                                <p>
                                    <?php
                                        $input='<input type="submit" class="btn btn-warning" name="button" id="button" value="Alterar">';
                                        echo $input; 
                                    ?>
                                </p>
                                </td>

                                <td> 
                             <button class="btn btn-danger" type="submit" formaction="deletaPessoa.php">Deletar</button>
                            </td> 
                              </form>
                            </tr>
                              <?php
                    // finaliza o loop que vai mostrar os dados
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
                  <?php
                    // finaliza o if
                    }
                    $Obj_Conexao->Desconecta();
                ?>
                </div>
        <div class="container">
           <div class="col-sm-3">
            <form name="formContato" method="get" action="index.html">
            <p>
                <input type="submit" class="btn btn-success" name="button" id="button" value="Voltar para Menu">
            </p>
            </form>
            </div>
            <div class="col-sm-3">
            <form>
                <p>
                    <input type="button" class="btn btn-primary" value="Imprimir Relatório" onClick="window.print()"/>
                </p>
            </form>
            </div>
        </div>
</body>
</html>