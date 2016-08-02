 <?php
 $matr = $_SESSION['session_user'];

 $select = "SELECT nome FROM funcionario WHERE matricula = '$matr' ";

 $stmt = $conexao->prepare($select);
 $stmt->execute();
 $aux = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

 <div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="index.php"><span><b>SQM - Sistema de Monitoria</b></span></a>

      <!-- start: Header Menu -->
      <div class="nav-no-collapse header-nav">
        <ul class="nav pull-right">
          <!-- start: User Dropdown -->
          <li class="dropdown">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="halflings-icon white user"></i> <?php echo $aux['nome']?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-menu-title">
                <span>Configurações</span>
              </li>
              <li><a href="index.php?cod=11"><i class="halflings-icon user"></i> Alterar senha</a></li>
              <li><a data-toggle="modal" href="#sair"><i class="halflings-icon off"></i> sair</a></li>
            </ul>
          </li>
          <!-- end: User Dropdown -->
        </ul>
      </div>
      <!-- end: Header Menu -->

    </div>
  </div>

  <div class="modal hide fade" id="sair">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3>Confirmação</h3>
    </div>
    <div class="modal-body">
      <p>Tem certeza que deseja sair?</p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn" data-dismiss="modal">Voltar</a>
      <a href="controller/logoff.php" class="btn btn-primary">Sair</a>
    </div>
  </div>

</div>