<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2><i class='bx bxs-virus'></i> Admin Panel</h2>
  <hr />
  <a href="<?php echo base_url("dashboard")?>">
    <i class='bx bxs-dashboard'></i>
    <span>Dashboard</span>
  </a>
  <a href="<?php echo base_url("utilizadores")?>">
    <i class='bx bxs-user'></i>
    <span>Utilizadores - Gestão de utilziadores</span>
  </a>
  <a href="<?php echo base_url("produtos")?>">
    <i class='bx bxs-shopping-bag'></i>
    <span>Produtos - Gestão de produtos</span>
  </a>
  <a href="<?php echo base_url("contatos")?>">
    <i class='bx bxs-spreadsheet'></i>
    <span>Contatos - Gerir todos os pedidos de ajuda/dúvidas dos utilizadores</span>
  </a>
  <a href="<?php echo base_url("criar_administrador")?>">
    <i class='bx bx-user-plus'></i>
    <span>Criar conta administrador</span>
  </a>
</div>

<div id="menu">
  <span class="menuTitle" onclick="openNav()">&#9776; <?php echo $title ?></span>

  <span class="authV">
    <a href="<?php echo base_url("terminar_sessao")?>">
      <i class='bx bx-log-in' ></i>
    </a>
  </span>

    <span class="authVV">
      <a href="<?php echo base_url("iniciar_sessao")?>">
        Iniciar Sessão
      </a>
    </span>

</div>

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("menu").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("menu").style.marginLeft= "0";
  }
</script>
