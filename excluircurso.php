<?php
  //recebem os dados que estão chegando por GET
  $id = $_GET['id'];
  
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql do delete
  $sql = "delete from tbcurso where codcurso = '$id'";
		  
  
  //realizar a consulta
  $consulta = $conexao->query($sql);
  
  //testa se consulta deu certo
  if ($consulta == true){
		header('Location: buscacurso.php?delete=ok'); 
  }else{
		header('Location: buscacurso.php?delete=erro'); 
  }
?>









