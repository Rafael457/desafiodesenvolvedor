  <?php
  


  include 'conecta_banco.php';  

  $Obj_Conexao = new CONEXAO();

  $pega_dados = $Obj_Conexao->Consulta("select * from Pessoa");

  $retorno = mysql_num_rows($pega_dados);

  if($retorno == 0 )

  {

          print("<center>Erro ao carregar as informações !!<br>");

          return 0;

  }

  else

  {

for ($i = 0; $i < $retorno; ++$i)

          {

                  $linha = mysql_fetch_array($pega_dados);

                  $id = $linha[0];

                  $descricao = $linha[1];

                  $nome = $linha[2];

                  print("$id - $descricao - $nome <br>");

          }

  }

 $Obj_Conexao->Desconecta();

?>