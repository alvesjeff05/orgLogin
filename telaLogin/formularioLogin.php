<?php
    if(isset($_POST["submit"]))
    {
        include_once("formularioConfig.php");
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $complemento = $_POST["complemento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        
        $dados = mysqli_query($conexao, "INSERT INTO cliente(email,senha,cep,rua,complemento,cidade,estado) VALUES ('$email', '$senha', '$cep', '$rua', '$complemento', '$cidade', '$estado')");
    }
?>









<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="estiloFormulario.css">
    <title>Formulário</title>
    

</head>
<body>
    <form action="formularioLogin.php" method="post">
        <h1>FORMULÁRIO</h1><br>
    <form class="row g-3">
            <div class="layout">
                <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="inputEmail" name="email" >
                </div>
                <div class="col-md-6">
                <label for="inputPassword" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="inputPassword" name="senha">
                </div>
                <div class="col-md-2">
                    <label for="inputCep" class="form-label">Cep:</label>
                    <input type="text" class="form-control" id="inputCep" name="cep" placeholder="Apenas números.">
                </div>
                <div class="col-12">
                <label for="inputRua" class="form-label">Rua:</label>
                <input type="text" class="form-control" id="inputRua" name="rua" >
                </div>
                <div class="col-12">
                <label for="inputComplemento" class="form-label">Complemento:</label>
                <input type="text" class="form-control" id="inputComplemento" name="complemento">
                </div>
                <div class="col-md-6">
                <label for="inputCidade" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="inputCidade" name="cidade">
                </div>
                <div class="col-md-4">
                <label for="inputEstado" class="form-label">Estado:</label>
                <input id="inputEstado" class="form-select" name="estado">
                </div>

                <div class="col-12">
                    <button type="submit"  onclick="clicarBotao()" class ="btn btn-dark" id="submit" name="submit">Cadastar</button>
                    <button type="reset" onclick="limpar()" class="btn btn-dark" id="apagar" name="reset">Apagar</button>
                </div>
            </div>
    </form>
    </form>
      <script src="codigoFormulario.js"></script>
</body>
</html>