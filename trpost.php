<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Toca da Alegria </title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div id="area-cabecalho">
          </div>


 <div id="area-principal">

        <div id="area-postagens">
            <div class="postagem">  
<?php
$conexao_bd = new mysqli ("localhost","isana","anaeisadora123","toca");

if(mysqli_connect_errno() !=0) {
    echo "<p> <b>Não foi possível conectar-se ao banco de dados.</b></p>";
    echo mysqli_connect_error()."=>".mysqli_connect_errno();
}

$nome =isset($_POST["nome"])? $_POST["nome"]:"";
$endereco =isset($_POST["feedback"])? $_POST["feedback"]:" ";
$email =isset($_POST["email"])? $_POST["email"]:" ";
$assunto =isset($_POST["assunto"])? $_POST["assunto"]:" ";



   
   
 $retornosql=$conexao_bd->query("insert into clientes(nome, feedback, email, assunto) "
        ."values('$nome', '$endereco', '$email', '$assunto')");
    $retornosql2=$conexao_bd->query("select max(codigo_cli) as cli from clientes");
      //var_dump($retornosql2);//
    if($retornosql2->num_rows> 0) {
        while ($registros = $retornosql2->fetch_assoc()) {
            $cli = $registros["cli"];
 
    
        }
        }       
    
   if(mysqli_connect_errno() !=0) {
    echo "<p> <b>Não foi possível conectar-se ao banco de dados.</b></p>";
    echo mysqli_connect_error()."=>".mysqli_connect_errno();
       
   }
$conexao_bd->close();
?> <br>
</div>
</div>

</div></body>





</html>