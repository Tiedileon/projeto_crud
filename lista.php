<?php
include_once("inc/utils.php");
$page = "LISTA";
$conn = getConn();
if($conn) {
    $result = getProducts($conn);
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
      <th scope="col">Preco</th>
      <th scope="col">Categoria</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody>
  <?php while($prod = mysqli_fetch_assoc($result)):?>
    <tr>
      <th scope="row"><?=$prod['id']?></th>
      <td><?=$prod['nome_produto']?></td>
      <td><?=$prod['quant']?></td>
      <td><?=$prod['preco']?></td>
      <td><?=$prod['nome_categoria']?></td>
      <td>
      <!--<a href="excluir.php?id=<?=$prod['id']?>">Editar</a>--> 
      <form action="editar.php" method="GET">
        <input hidden type="text" name="id" value="<?=$prod['id']?>">
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
      <!-- <a href="excluir.php?id=<?=$prod['id']?>">Excluir  </a>-->
      <form action="excluir.php" method="GET">
        <input hidden type="text" name="id" value="<?=$prod['id']?>">
        <button type="submit" class="btn btn-danger">Excluir</button>
      </form>
      </td>
    </tr>
  <?php endwhile; ?>
    
  </tbody>
</table>
  </div>
  <?php include("inc/footer.php");?>
  </body>
</html>