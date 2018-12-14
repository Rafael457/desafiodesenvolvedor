<!DOCTYPE html>
<html>
    <head>
    <title>Deleta Pessoa</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>
<?php
 $codpessoa = $_GET["codpessoa"];
?>
<body>
	<div align="CENTER">
			<h1>Sistema de remoção</h1>
			<p>Deletar Pessoa</p>
<!--######################### inicio do form e div o qual o contem ##########################-->
		<div class="container">
			<div class="alert alert-info ">
					<p>
					<form name="formContato" method="get" action="deletarPess.php">
					<input type="number" name="codpessoa" value="<?=$codpessoa?>" required></br></br>
				<div>
					<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Deletar Pessoa</button>
					<!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Tem certeza?</h4>
				        </div>
				        <div class="modal-body">
				          <p>Você realmente deseja deletar este index?</p><br>
				          <input class="btn btn-danger" type="submit" name="button" id="button" value="Sim">	
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
				        </div>
				      </div>
				      
				    </div>
				  </div>
				</div>
			</form>
		</p>
			</div>
		</div>
	</div>
	<div class="container">
		<form name="formContato" method="get" action="index.html">
        <p>
            <input type="submit" class="btn btn-success" name="button" id="button" value="Voltar para Menu">
        </p>
    </form>
</div>
</body>
</html>