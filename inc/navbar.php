<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Projeto CRUD</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?=navActive($page,"LISTA")?>">
        <a class="nav-link" href="lista.php">Listagem</a>
      </li>
      <li class="nav-item <?=navActive($page,"CADASTRO")?>">
        <a class="nav-link" href="cadastro.php">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">SAIR</a>
      </li>
    </ul>
    
  </div>
  <div class="btn-group">
      <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?=$_SESSION["SESSIONNAME"]?> | <?=$_SESSION["SESSIONEMAIL"]?>
      </button>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">SAIR</a>
          <a class="dropdown-item" href="#">Another action</a>
          
        </div>
      </div>
  </nav>