<!DOCTYPE html>
<html lang="en">
<?php include("inc/header.php");?>
<body>
<div class="container">
<div class="row align-items-center">
    <div class="col">
    </div>
    <div class="col">
    <H1>Login</H1><br/>
    <form method="POST" action="login.php">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="nome@email.com">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="****">
        </div>
        <button type="submit" class="btn btn-primary">Acessar</button>
        </form>
    </div>
    <div class="col">
    </div>
  </div>    
</body>
</html>