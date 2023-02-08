<div class="area"></div>
<nav class="main-menu">
  <ul>
    <li>
      <a href="<?php echo base_url("dashboard") ?>">
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        <span class="nav-text">
          Dashboard
        </span>
      </a>

    </li>
    <li class="has-subnav">
      <a href="<?php echo base_url("utilizadores") ?>">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span class="nav-text">
          Utilizadores
        </span>
      </a>

    </li>
    <li class="has-subnav">
      <a href="<?php echo base_url("produtos") ?>">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <span class="nav-text">
          Produtos
        </span>
      </a>

    </li>
    <li class="has-subnav">
      <a href="<?php echo base_url("") ?>">
        <i class="fa fa-file" aria-hidden="true"></i>
        <span class="nav-text">
          Contatos
        </span>
      </a>

    </li>
    <li>
      <a href="<?php echo base_url("criar_administrador") ?>">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <span class="nav-text">
          Criar administrador
        </span>
      </a>
    </li>
  </ul>

  <ul class="logout">
    <li>
      <a href="<?php echo base_url("terminar_sessao") ?>">
        <i class="fa fa-power-off fa-2x"></i>
        <span class="nav-text">
          Terminar Sessão
        </span>
      </a>
    </li>
  </ul>
</nav>
