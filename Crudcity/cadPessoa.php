<!DOCTYPE html>
<html>
<head>
  <title>Cadastrar departamento</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<body>
  <div class="container">
<?php
include 'conexao/conecta_banco.php';  

  $Obj_Conexao = new CONEXAO();

   $nomecli = $_GET["nome"];
 
   $sexo = $_GET["sexo"];
   
   $datanasc = $_GET["datanasc"];

   $datacad = $_GET["datacad"];

   $codpessoa = $_GET["codpessoa"];

   $quary = "insert into Pessoa (codpessoa, Nome, sexo, datanasc, datacad) 
   values (".$codpessoa.",'".$nomecli."','".$sexo."','".$datanasc."','".$datacad."')";
   
  $inserirdados = $Obj_Conexao->inserir($quary);

  if($inserirdados==1)
  {
   echo  '<div class="alert alert-success">
            <strong>Sucesso!</strong> Dados inseridos com sucesso.
          </div>';
  }
  else
  {
  	echo '<div class="alert alert-danger">
            <strong>Error!</strong> Incapaz de inserir dados no banco.
          </div>';
  }

  $Obj_Conexao->Desconecta();
?> 
<form action="index.html" method="get" accept-charset="utf-8">
  <p>
<input type="submit" class="btn btn-success" name="button" id="button" value="Voltar para Menu">
</p>
</form>
</div>
</body>
</html>