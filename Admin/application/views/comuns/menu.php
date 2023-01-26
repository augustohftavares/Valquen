<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2><i class='bx bxs-right-arrow' ></i> Admin Panel</h2>
  <hr />
  <a href="<?php echo base_url("dashboard")?>"><i class='bx bxs-dashboard'></i> Dashboard</a>
  <a href="<?php echo base_url("utilizadores")?>"><i class='bx bxs-user'></i> Utilizadores</a>
  <a href="<?php echo base_url("produtos")?>"><i class='bx bxs-shopping-bag'></i> Produtos</a>
  <a href="<?php echo base_url("contatos")?>"><i class='bx bxs-spreadsheet'></i> Contatos</a>
</div>

<div id="menu">
  <span class="menuTitle" onclick="openNav()">&#9776; Valquen Loja Online</span>

  <?php if(!$_SESSION['logged_in'] === FALSE): ?>
  <span class="authV">
    <a href="<?php echo base_url("terminar_sessao")?>" onclick="return confirm('Pretendes mesmo terminar sessão ?');">
      <i class='bx bx-log-in' ></i>
    </a>
  </span>
  <?php endif;?>

  <?php if(!$_SESSION['logged_in'] === TRUE): ?>
    <span class="authVV">
      <a href="<?php echo base_url("iniciar_sessao")?>">
        Iniciar Sessão
      </a>
    </span>
  <?php endif; ?>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("menu").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("menu").style.marginLeft= "0";
}
</script>
