<!--
<html>
<script language="JavaScript">//VALIDAÇÃO DA DATA 
function VerificaData(digData) {	
var bissexto = 0;	
var data = digData; 	
var tam = data.length;	
if (tam == 10) 	{		
var dia = data.substr(0,2)		
var mes = data.substr(3,2)		
var ano = data.substr(6,4)		
if ((ano > 1900)||(ano < 2100))		{			
switch (mes) 			{				
case '01':				
case '03':				
case '05':				
case '07':				
case '08':				
case '10':				
case '12':					
if  (dia <= 31) 					{						
return true;					
}					
break								
case '04':						
case '06':				
case '09':				
case '11':					
if  (dia <= 30) 					{						
return true;					
}					
break				
case '02':					
/* Validando ano Bissexto / fevereiro / dia */ 					
if ((ano % 4 == 0) || (ano % 100 == 0) || (ano % 400 == 0)) 					{ 						
bissexto = 1;
 					} 					
if ((bissexto == 1) && (dia <= 29)) 					{
 						return true;
				 					} 					
if ((bissexto != 1) && (dia <= 28)) 					{ 						
return true; 					
}								
break									
}		
}	
}		
alert("A Data "+data+" é inválida!");	
return false;}
</script>
<body>
Digite a data no seu nascimento:
<form method="POST" action="" target="_self" name="frm">
<INPUT type=text NAME="data" id="data" SIZE=10 MAXLENGTH=10 onBlur="VerificaData(this.value);">
 </form>   					
 </body>
 </html>-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Tooltip Example</h3>
  <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>
