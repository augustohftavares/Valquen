
<div class="header">
  <div class="navbar navbar1">
    <div class="navbar__wrapper">
      <nav class="navbar__menu">


          <a class="navbar__brand welcomeMsg" href="<?php echo base_url("")?>">
            <?php if(!$_SESSION['logged_in'] === FALSE): ?>
              Bem-Vindo <?php echo $_SESSION['user_name'] ?>
            <?php endif; ?>
          </a>

        <ul class="navbar__nav">

          <li class="navbar__link after-transform">
            <?php if(!$_SESSION['logged_in'] === TRUE): ?>
              <a href="<?php echo base_url("iniciar_sessao")?>">
                Iniciar Sessão
              </a>
            <?php endif; ?>
          </li>

          <li class="navbar__link after-transform">
            <?php if(!$_SESSION['logged_in'] === FALSE): ?>
              <a href="<?php echo base_url("terminar_sessao")?>">
                Terminar Sessão
              </a>
            <?php endif; ?>
          </li>

        </ul>
      </nav>
    </div>
  </div>

  <div class="navbar">
    <div class="navbar__wrapper">
      <nav class="navbar__menu"><a class="navbar__brand" href="<?php echo base_url("")?>">Valquen<img src="#" alt=""/></a>
        <div id="nav-icon3"><span></span><span></span><span></span><span></span></div>
        <ul class="navbar__nav">
          <li class="navbar__link after-transform"><a class="active" href="<?php echo base_url("")?>">Inicio</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Venda na Valquen</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Ofertas do Dia</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Livros</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Eletrónicos</a></li>
          <li class="navbar__link after-transform"><a href="<?php echo base_url("")?>">Atendimento ao Cliente</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="navbar-responsive">
    <ul class="navbar-responsive__nav">
      <li class="navbar-responsive__link after-transform"><a class="active" href="<?php echo base_url("")?>">Inicio</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Venda na Valquen</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Ofertas do Dia</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Livros</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Eletrónicos</a></li>
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("")?>">Atendimento ao Cliente</a></li>
    </ul>
  </div>
</div>
