<div class="header">
  <div class="navbar navbar1">
    <div class="navbar__wrapper">
      <nav class="navbar__menu">

        <a class="navbar__brand welcomeMsg" href="<?php echo base_url("")?>">
          <?php
            if($this->session->userdata['userinfo']['logged_in'])
              echo "Bem-vindo " . $this->session->userdata['userinfo']['name'];
            else
              echo "<i class='bx bxs-store'></i>";
          ?>
        </a>

        <div class="input-search">
            <i class='bx bx-search-alt-2 iconsearch' ></i>
            <input class="input-field" type="text" placeholder="Pesquisar produtos ou marcas.." name="searchbar">
          </div>

        <ul class="navbar__nav">

          <li class="navbar__link after-transform dropdown">
              <a href=""><i class='bx bxs-user'></i></a>
              <div class="dropdown-content">
                <?php if($this->session->userdata['userinfo']['logged_in'] == TRUE): ?>
                  <a href="">Perfil</a>
                <?php endif; ?>

                <?php if($this->session->userdata['userinfo']['logged_in'] == FALSE): ?>
                  <a href="<?php echo base_url("iniciar_sessao") ?>">Iniciar Sessão</a>
                <?php endif; ?>

                <?php if($this->session->userdata['userinfo']['logged_in'] == TRUE): ?>
                  <a href="<?php echo base_url("terminar_sessao") ?>">Terminar Sessão</a>
                <?php endif; ?>
              </div>
          </li>

          <li class="navbar__link after-transform dropdown">
            <a href="<?php echo base_url("")?>"><i class='bx bxs-shopping-bag'></i></a>
          </li>

        </ul>
      </nav>
    </div>
  </div>

  <div class="navbar">
    <div class="navbar__wrapper">
      <nav class="navbar__menu"><a class="navbar__brand" href="<?php echo base_url("")?>">VALQUEN<img src="#" alt=""/></a>
        <div id="nav-icon3"><span></span><span></span><span></span><span></span></div>
        <ul class="navbar__nav">
          <li class="navbar__link after-transform"><a class="active" href="<?php echo base_url("")?>">Inicio</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Promoções</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Homem</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Mulher</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("atendimento_ao_cliente")?>">Atendimento ao Cliente</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="navbar-responsive">
    <ul class="navbar-responsive__nav">
      <li class="navbar-responsive__link after-transform"><a class="active" href="<?php echo base_url("")?>">Inicio</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Promoções</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Homem</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Mulher</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("atendimento_ao_cliente")?>">Atendimento ao Cliente</a></li>
    </ul>
  </div>
</div>
