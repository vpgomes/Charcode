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
	margin-left: auto;
}
    header{
      background-color: #007849;
      width: 100%;
      height: 100px;
      color: gold;
    }
    img{
      width: 100px;
      height: 100px;
      margin-left: 40%;
    }
    body{
      background-color: black;
    }
    #entra{
      width: 300px;
      height: 300px;
      margin-left: 20%;
    }
    a{
      color: white;
    }

</style>

<?php 
include 'conexao.php';
  if (!empty($_POST['enviar'])) {
       $query = "SELECT * from usuario;";
         $resultado = mysqli_query($link, $query);

    while ($linha = mysqli_fetch_array($resultado)){
      if ($_POST['senha']== $linha['senha'] && $_POST['email']== $linha['email']) {
        header("Location:menu.php");
      }
      else{
        echo "<script type = 'text/javascript'> alert('Email e/ou senha incorreta');</script>";
      }
    }
  
 }
 ?>

</head>
<body>
  <header><img src="gaia.png" id="par2"><br><br></header><br><br><br>

<form action="" method="POST" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Senha" name="senha">
  </div>
  <input type="submit" class="btn" name="enviar" value="Enviar">
  <a href="cadastro.php">Não possui cadastro?</a>
</form>

</body>
</html>