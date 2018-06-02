<?php
$page = "CADASTRO";
include_once("inc/utils.php");
$conn = getConn();
if($conn && $_POST){
    if (addProduct ($conn,$_POST['produto'],$_POST['preco'],$_POST['quantidade'])){
        header('Location: lista.php?message=success');
    } else {
        header('Location: cadastro.php?message=danger');
    }
}
?>
<!doctype html>
<html lang="en">
  <?php include("inc/header.php");?>
  <body>
  <?php include("inc/navbar.php");?>

  <div class="container"><br>
  <?php include_once("inc/alerts.php") ?>

  <form action="cadastro.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="produto">Produto</label>
      <input autofocus type="text" class="form-control" id="produto" name="produto" placeholder="Produto">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="quantidade">Quantidade</label>
      <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
    </div>
    <div class="form-group col-md-6">
      <label for="preco">Preco (R$)</label>
      <input type="text" class="form-control" id="preco" name="preco" placeholder="0.00">
    </div>
    <div class="form-group col-md-6">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">SALVAR</button>
</form>
</div>



  <?php include("inc/footer.php");?>
  </body>
</html>