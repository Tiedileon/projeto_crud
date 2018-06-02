<?php
$page = "EDITAR";
include_once("inc/utils.php");
$conn = getConn();
if($conn && $_GET){
$produto = getProductById($conn,$_GET['id']);
if(!$produto){
  header('Location: lista.php?message=itemnotfound');
}
}
if($conn && $_POST){
  $updated = updateProduct($conn,$_POST['id'],$_POST['produto'],$_POST['quantidade'],$_POST['preco']);
  header('Location: lista.php?message=updated');
  }
?>
<!doctype html>
<html lang="en">
  <?php include("inc/header.php");?>
  <body>
  <?php include("inc/navbar.php");?>

  <div class="container"><br>
  <?php include_once("inc/alerts.php") ?>

  <form action="editar.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="produto">Produto</label>
      <input autofocus type="text" class="form-control" id="produto" name="produto" value="<?php echo $produto['nome'];?>">
      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $produto['id'];?>">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="quantidade">Quantidade</label>
      <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?php echo $produto['quant'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="preco">Preco (R$)</label>
      <input type="text" class="form-control" id="preco" name="preco" value="<?php echo $produto['preco'];?>">
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