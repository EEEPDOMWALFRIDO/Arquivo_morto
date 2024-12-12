<?php
  //recebem os dados que estão chegando por POST
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql de consulta
  $sql = "select * from tbusuario where email = '$email'
          and senha = '$senha'";
		  
  
  //realizar a consulta
  $consulta = $conexao->query($sql);
  
  //testa se consulta deu certo
  if ($consulta == true){
	 //verifica se encontrou pelo menos uma linha
	 if($consulta->num_rows > 0) {
    $linha=$consulta->fetch_array(MYSQLI_ASSOC);

		//criando sessão 
		session_start();
        $_SESSION['login'] = 'ok';
        $_SESSION['usuario'] = $email;
        $_SESSION['nome'] = $linha['nome'];    
	
		header('Location: buscaestudante.php'); 
	 } else {
		header('Location: index.php?login=erro'); 
	 }
  }
?>