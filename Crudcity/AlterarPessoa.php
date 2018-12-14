<?php
  include 'conexao/conecta_banco.php';  

  $Obj_Conexao = new CONEXAO();
  //$pega_dados = $Obj_Conexao->Consulta("select max(codcli) as total from cliente" );
  //$dados=mysql_fetch_assoc($pega_dados);
 $codpessoa = $_GET['codpessoa'];

 $nome = $_GET['Nome'];

 $datanasc = $_GET['datanasc'];

 $datacad = $_GET['datacad'];

 $sexo = $_GET['sexo'];
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema de Alteração</title>
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
    <div align="center">  
      <h1>Sistema de Alteração</h1>

      <p>Alterar Pessoa.</p>
    </div>
<script language="JavaScript">

//VALIDAÇÃO DA DATA 
function VerificaDatanasc(digData) 
{ 
  var bissexto = 0; 
  var data = digData;   
  var tam = data.length;  
  if (tam == 10)  
  {   
    //var dia = data.substr(8,10)   
    //var mes = data.substr(5,2)    
    var ano = data.substr(0,4)    
    if ((ano > 1900)&&(ano < 2019)) 
    {     
      return true;
      /*switch (mes)      
      {       
        case '01':        
        case '03':        
        case '05':        
        case '07':        
        case '08':        
        case '10':        
        case '12':          
        if  (dia <= 31)           
        {           
          return true;          
        }         
      break               
        case '04':            
        case '06':        
        case '09':        
        case '11':          
        if  (dia <= 30)           
        {           
          return true;          
        }         
      break       
      case '02':          
      /* Validando ano Bissexto / fevereiro / dia */          
      /*  if ((ano % 4 == 0) || (ano % 100 == 0) || (ano % 400 == 0))           
        {             
          bissexto = 1;
        }           
        if ((bissexto == 1) && (dia <= 29))           
        {
          return true;
        }           
        if ((bissexto != 1) && (dia <= 28))           
        {             
          return true;          
        }               
      break*/                 
      }
      else
      {
        alert("A Data de Nascimento"+data+" é inválida!");  
        return false;
      }
    
    } 
    else
    {
      alert("A Data de Nascimento "+data+" &eacute inválida!"); 
      return false;
    }

}
function VerificaDatacad(digData) 
{ 
  var dat = new Date();
  var di = dat.getUTCDate();
  var me = dat.getMonth()+1;
  var an = dat.getFullYear();   
  var data = digData;   
  var tam = data.length;  
  if (tam == 10)  
  {   
    var dia = data.substr(8,10)   
    var mes = data.substr(5,2)    
    var ano = data.substr(0,4)  
    if ((ano==an)&&(dia==di)&&(mes==me))  
    {     
      return true;        
    }
    else
    {
      alert("A Data de cadastro "+data+" é inválida!"); 
      return false;
    }
    
  } 
  else
  {
    alert("A Data de cadastro "+data+" &eacute inválida!"); 
    return false;
  }

}
</script>
    <div align="left">
      <div class="alert alert-info">    
        <form name="formContato" method="get" action="altPessoa.php">
          <div class="row">
            <div class="col-lg-3">
              <p>
              Nome:
              </p>
              <p>
               <input type="text" name="nome" value="<?=$nome?>"required>
               </p>   
            </div>
            <div class="col-lg-3">
              <p>
              Data de Nascimento:
              </p>
              <p>
              <input class="btn btn-primary btn-xs" <input type="date" value="<?=$datanasc?>" name="datanasc" id="datanasc" onchange="VerificaDatanasc(this.value);" required>
              </p>
            </div>
            <div class="col-lg-3">
              <p>
              Sexo:
              </p>
              <p>
              <select class="btn btn-primary btn-xs" name="sexo">
                  <option value="<?=$sexo?>" selected><?=$sexo;?></option>
                  <option value="masculino">masculino</option>
                  <option value="feminino">feminino</option>
              </select>
              </p>
            </div>
            <div class="col-lg-3">
              <p>
              Data de cadastro:
              </p>
              <p>
              <input class="btn btn-primary btn-xs" type="date" value="<?=$datacad?>" name="datacad" id="datacad" onchange="VerificaDatacad(this.value);" required>
              </p>
            </div>
          </div>
          <p>
            codigo:
          </p>
          <p>
            <!--<input type="number" name="codcli" value="<?=$dados['total']+1?>">-->
            <input type="number" name="codpessoa" value="<?=$codpessoa?>" disabled>
            <p class="help-block">
              Este campo é preenchido pelo banco de dados.
            </p>
            <input type="hidden" name="codpessoa" value="<?=$codpessoa?>">
          </p>
          
          <p>
            <input type="submit" class="btn btn-primary" name="button" id="button" value="Alterar">
          </p>
        </form>
      </div>
    </div>
    <form action="index.html" method="get" accept-charset="utf-8">
    <p>
      <input type="submit"  class="btn btn-success" name="button" id="button" value="Voltar para Menu">
    </p>
    </form>
  </div>
</body>
</html>