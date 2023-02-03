<div class="header">
  <div class="navbar navbar1">
    <div class="navbar__wrapper">
      <nav class="navbar__menu">

          <a class="navbar__brand welcomeMsg" href="<?php echo base_url("")?>">
            <?php
              echo "Bem-vindo ";
            ?>
          </a>

        <ul class="navbar__nav">

          <li class="navbar__link after-transform">
              <a href="<?php echo base_url("iniciar_sessao")?>">
                <?php
                  echo "Iniciar Sessão";
                ?>
              </a>
          </li>

          <li class="navbar__link after-transform">
              <a href="<?php echo base_url("terminar_sessao")?>">
                <?php
                  echo "Terminar Sessão";
                ?>
              </a>
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
          <li class="navbar__link after-transform"><a href="<?php echo base_url("atendimento_ao_cliente")?>">Atendimento ao Cliente</a></li>
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
      <li class="navbar-responsive__link after-transform"><a href="<?php echo base_url("atendimento_ao_cliente")?>">Atendimento ao Cliente</a></li>
    </ul>
  </div>
</div>
