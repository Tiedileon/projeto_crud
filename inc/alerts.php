
  <?php if ($_GET && $_GET['message'] == "danger"):?>
  <div class="alert alert-danger" role="alert">
  Seu produto nao foi cadastrado!</a>. Tente novamente.
  </div>
  <?php endif;?>
  
  <?php if($_GET && $_GET['message'] == 'success'):?>
  <div class="alert alert-success" role="alert">
  Produto adicionado com sucesso!
  </div>
  <?php endif; ?>
  
  <?php if($_GET && $_GET['message'] == 'excluded'):?>
  <div class="alert alert-success" role="alert">
  Produto EXCLUIDO com sucesso!
  </div>
  <?php endif; ?>

  <?php if($_GET && $_GET['message'] == 'excludfail'):?>
  <div class="alert alert-danger" role="alert">
  Falha ao exluir produto!
  </div>
  <?php endif; ?>

  <?php if($_GET && $_GET['message'] == 'itemnotfound'):?>
  <div class="alert alert-danger" role="alert">
  Produto NAO ENCONTRADO!
  </div>
  <?php endif; ?>

  <?php if($_GET && $_GET['message'] == 'updated'):?>
  <div class="alert alert-success" role="alert">
  Item atualizado com Sucesso!
  </div>
  <?php endif; ?>