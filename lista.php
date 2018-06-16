<?php
include_once("inc/utils.php");
include_once("classes/Produtos.php");
$page = "LISTA";
redirIfNotLogged();
$conn = getConn();
if($conn) {
    $produtos = getProducts($conn);
}
?>
<!doctype html>
<html lang="en">
  <?php include("inc/header.php");?>
  <body>
  <?php include("inc/navbar.php");?>
  <div class="container"><br>   
  <?php include_once("inc/alerts.php");?>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preco Unit</th>
      <th scope="col">Total R$</th>
      <th scope="col">Categoria</th>
      <th scope="col">Situacao Est</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($produtos as $produto):?>
    <tr>
      <th scope="row"><?=$produto->id?></th>
      <td><?=$produto->getNome()?></td>
      <td><?=$produto->quant?></td>
      <td><?=$produto->getpreco()?></td>
      <td><?=$produto->total()?></td>
      <td><?=$produto->situacao()?></td>
      <td><?=$produto->categoria->nome?></td>
      <td>
      <form action="editar.php" method="GET">
        <input hidden type="text" name="id" value="<?=$produto->id?>">
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
      <form action="excluir.php" method="GET">
        <input hidden type="text" name="id" value="<?=$produto->id?>">
        <button type="submit" class="btn btn-danger">Excluir</button>
      </form>
      </td>
    </tr>
<?php endforeach; ?>
    
  </tbody>
</table>
  </div>
  <?php include("inc/footer.php");?>
  </body>
</html>