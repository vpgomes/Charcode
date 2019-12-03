<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #007849;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #007849;
}


.btn {
  background-color: #007849;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.titulo{
	display: block;
	margin-right: auto;
  color:white;
	margin-left: auto;
  text-align: center;
}
header{
      background-color: #007849;
      width: 100%;
      height: 100px;
      color: gold;
    }
    img{
      width: 100px;
      height: 90px;
      margin-left: 40%;
    }
    body{
      background-color: black;
    }
</style>

<?php 
include 'conexao.php';
  if (!empty($_POST['enviar'])) {
    $query = "INSERT INTO usuario(cpf,nome,email,senha) VALUES ('".$_POST['cpf']."','".$_POST['nome']."','".$_POST['email']."','".$_POST['senha']."');";

  if ($_POST['senha'] == $_POST['Confsenha']) {
    mysqli_query($link,$query); 
  }else{
    echo "<script type = 'text/javascript'> alert('Senha incorreta');</script>";
  }
 
  }
  
?>

</head>
<body>
<header><img src="gaia.png" id="par2"><br><br></header><br>

<form action="" method="POST" style="max-width:500px;margin:auto">
  <h2 class="titulo">Cadastro</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Nome" name="nome">
  </div>

   <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Cpf" name="cpf">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Senha" name="senha">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirmar senha" name="Confsenha">
  </div>

  <input type="submit" class="btn" name="enviar" value="Enviar">
</form>

</body>
</html>
