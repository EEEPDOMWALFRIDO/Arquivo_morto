<?php
  //recebem os dados que estão chegando por POST
  $codest = $_POST['codest'];
  $codcurso = $_POST['codcurso'];
  $nome = $_POST['nome'];
  $nomedamae = $_POST['nomedamae'];
  $ano = $_POST['ano'];
  $estante = $_POST['estante'];
  $seq = $_POST['seq'];

  //fazendo conexão com o banco de dados
  include('banco.php');

  $nome_M = strtoupper($nome);
  $responsavel_M = strtoupper($nomedamae);
  $curso_M = strtoupper($codcurso);
  $estante_M = strtoupper($estante);

  //criar sql do update
  $sql = "update tbestudante set nome ='$nome_M', nomedamae ='$responsavel_M', curso ='$curso_M', ano ='$ano', estante ='$estante_M', seq='$seq' where codest = '$codest'";


		  
  
  //realizar o update
  $consulta = $conexao->query($sql);
  
  //testar se update deu certo
  if ($consulta == true){
	   header('Location: buscaestudante.php?alter=ok');	 
  }else{
	   header('Location: buscaestudante.php?alter=erro'); 	  
  }
?>




