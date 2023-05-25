<?php
if(isset($_POST["submit"]))
{
    require_once("config_log/config_log.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];
   
			
    $result = mysqli_query($conexao, "INSERT INTO acesso(email,senha)
VALUES ('$email','$senha')");
}   

?>
