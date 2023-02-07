<div class="header">
  <div class="navbar navbar1">
    <div class="navbar__wrapper">
      <nav class="navbar__menu">

        <a class="navbar__brand welcomeMsg" href="<?php echo base_url("")?>">
          <img src="<?php echo base_url("assets/img/logo_2.png")?>" alt="valquen" />
        </a>

        <div class="input-search">
            <i class='bx bx-search-alt-2 iconsearch' ></i>
            <input class="input-field" type="text" placeholder="Pesquisar produtos ou marcas.." name="searchbar">
          </div>

        <ul class="navbar__nav">

          <li class="navbar__link after-transform dropdown">
              <a href=""><i class='bx bxs-user'></i></a>
              <div class="dropdown-content">

                <?php if(!isset($this->session->userdata['userinfo']['logged_in']) || $this->session->userdata['userinfo']['logged_in'] == FALSE ): ?>
                  <a href="<?php echo base_url("iniciar_sessao") ?>">Iniciar Sessão <i class='bx bx-chevron-right'></i></a>
                <?php else: ?>
                  <a href="<?php echo base_url("perfil") ?>">Perfil <i class='bx bx-chevron-right'></i></a>
                  <a href="<?php echo base_url("terminar_sessao") ?>">Terminar Sessão <i class='bx bx-chevron-right'></i></a>
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
      <nav class="navbar__menu">
        <div id="nav-icon3"><span></span><span></span><span></span><span></span></div>
        <ul class="navbar__nav nav2Position">
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Promoções</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Homem</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Mulher</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Marcas</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("atendimento_ao_cliente")?>">Atendimento ao Cliente</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="navbar-responsive">
    <ul class="navbar-responsive__nav">
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Promoções</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Homem</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Mulher</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Marcas</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("atendimento_ao_cliente")?>">Atendimento ao Cliente</a></li>
    </ul>
  </div>
</div>
