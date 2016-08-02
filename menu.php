 <!-- start: Main Menu -->
 <div id="sidebar-left" class="span2">
   <div class="nav-collapse sidebar-nav">
    <ul class="nav nav-tabs nav-stacked main-menu">
      <li><a href="index.php?cod=1"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li> 

      <!-- start: Monitoria 1° Nivel 
      <li>
        <a class="dropmenu" href="#"><i class="icon-edit"></i><span class="hidden-tablet"> Monitoria 1° Nivel <span class="label label-important"> 2 </span></a>
        <ul>
          <li><a class="submenu" href="index.php?cod=3"><i class="icon-file-alt"></i><span class="hidden-tablet"> Telefone</span></a></li>
          <li><a class="submenu" href="index.php?cod=4"><i class="icon-file-alt"></i><span class="hidden-tablet"> Web</span></a></li>
        </ul> 
      </li>
      end: Monitoria 1° Nivel -->

      <li>
        <a href="index.php?cod=5"><i class="icon-edit"></i><span class="hidden-tablet"> Monitoria 2° Nível</span></a>
      </li>

      <!-- start: Consulta monitoria 1° Nivel -->
      <li>
        <a class="dropmenu" href="#"><i class="icon-eye-open"></i><span class="hidden-tablet"> Consulta monitoria 1° <span class="label label-important"> 2 </span></a>
        <ul>
          <li><a class="submenu" href="index.php?cod=2"><i class="icon-file-alt"></i><span class="hidden-tablet"> Telefone</span></a></li>
          <li><a class="submenu" href="index.php?cod=6"><i class="icon-file-alt"></i><span class="hidden-tablet"> Web</span></a></li>
        </ul> 
      </li>
      <!-- end: Consulta monitoria 1° Nivel -->

      <li><a href="index.php?cod=7"><i class="icon-eye-open"></i><span class="hidden-tablet"> Consulta monitoria 2°</span></a></li>

      <li>
        <a class="dropmenu" href="#"><i class="icon-font"></i><span class="hidden-tablet"> Cadastro <span class="label label-important"> 3 </span></a>
        <ul>
          <li><a class="submenu" href="index.php?cod=8"><i class="icon-file-alt"></i><span class="hidden-tablet">Analista 1° nível</span></a></li>
          <li><a class="submenu" href="index.php?cod=9"><i class="icon-file-alt"></i><span class="hidden-tablet">Analista 2° nível</span></a></li>
          <?PHP if ($_SESSION['session_nivel']==1) {
           echo '<li><a class="submenu" href="index.php?cod=10"><i class="icon-file-alt"></i><span class="hidden-tablet">Monitor(a)</span></a></li>';
           }  ?>
       </ul>
     </li>

   </div>
 </div>

<!-- end: Main Menu -->