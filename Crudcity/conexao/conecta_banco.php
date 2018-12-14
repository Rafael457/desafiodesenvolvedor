  <?php

  class CONEXAO

  {

          var $usuario = "root";

          var $senha = "";

          var $sid = "localhost";

          var $banco = "Crudcity";

          var $consulta = "";

          var $cadastro = "";

         

  	var $link = "";  	function CONEXAO()

  	{

  		$this->Conecta();

  	}

  	function Conecta()

  	{

  		$this->link = @mysql_connect($this->sid,$this->usuario,$this->senha);

  		if (!$this->link)

  		{

  			die("Problema na Conexão com o Banco de Dados");

  		}

  		elseif (!mysql_select_db($this->banco,$this->link))

  		{

  			die("Problema na Conexão com o Banco de Dados");

  		}

  	}

function Desconecta()

  	{

  		return mysql_close($this->link);

  	}

function Consulta($consulta)

  	{

          	$this->consulta = $consulta;

  		if ($resultado = mysql_query($this->consulta,$this->link))

  		{

  			return $resultado;

} else {

  			return 0;

  		}

  	}
     function inserir($cadastro){

            $this->cadastro = $cadastro;

      if ($resultado = mysql_query($this->cadastro,$this->link))

            {
                return 1;
            }
            else
            {
                return 0;
            }
  }
    function alterar($alterar){

            $this->alterar = $alterar;

      if ($resultado = mysql_query($this->alterar,$this->link))

            {
                return 1;
            }
            else
            {
                return 0;
            }
  }
      function deletar($deletar){

            $this->deletar = $deletar;

      if ($resultado = mysql_query($this->deletar,$this->link))

            {
                return 1;
            }
            else
            {
                return 0;
            }
  }
  }

  ?>