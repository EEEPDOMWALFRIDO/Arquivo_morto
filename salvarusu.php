<?php
  //recebem os dados que estão chegando por POST
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql do insert
  $sql = "INSERT INTO tbusuario VALUES (null,'$nome','$email','$senha')";
		  
  
  //realizar o insert
  $consulta = $conexao->query($sql);

  if ($consulta == TRUE) {
    header('Location: frmcadest.php?cad=ok');
    exit(); // Importante para evitar que o script continue a ser executado após o redirecionamento
} else {
    echo "Erro ao executar a consulta: " . $conexao->error; // Exibe mensagem de erro SQL
    // Ou redirecione para uma página de erro
    header('Location: frmcadest.php?cad=erro');
    exit(); // Importante para evitar que o script continue a ser executado após o redirecionamento
}
?>




