<div class="container">

	<div class="row div-search">

		<img class="logo" src="<?php echo base_url("assets/img/vanlquen_logo.png")?>" title="logo" alt="Valquen" />
		<a href="<?php echo base_url("a-minha-conta")?>"><img class="enterimg" src="<?php echo base_url("assets/img/myaccount.png")?>"/>

	</div>

	<div class="row div-links">
		<ul class="nav menu-nav">
			<li class="list-nav <?php echo($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>">
				<a class="nav-links" href="<?php echo base_url() ?>">Produtos</a>
			</li>
			<span class="nav-links-separator">|</span>
			<li class="list-nav <?php echo($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'promocoes') ? 'active' : null; ?>">
				<a class="nav-links" href="<?php echo base_url("promocoes")?>">Promoções</a>
			</li>
			<span class="nav-links-separator">|</span>
			<li class="list-nav <?php echo($this->router->fetch_class() == 'Lojas' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>">
				<a class="nav-links" href="<?php echo base_url("lojas")?>">Lojas</a>
			</li>
			<span class="nav-links-separator">|</span>
			<li class="list-nav <?php echo($this->router->fetch_class() == 'Suporte' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>">
				<a class="nav-links" href="<?php echo base_url("suporte")?>">Suporte</a>
			</li>
			<span class="nav-links-separator">|</span>
			<li class="list-nav <?php echo($this->router->fetch_class() == 'Raiz' && $this->router->fetch_method() == 'avalquen') ? 'active' : null; ?>">
				<a class="nav-links" href="<?php echo base_url("avalquen")?>">A Valquen</a>
			</li>
		</ul>
	</div>

</div>