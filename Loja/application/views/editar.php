<?php
$this->load->view('comuns/header');
?>
	<body>

		<div id="container">

			<div class="inner">
				<h1 class="menu">EPCC - Lista Contatos</h1>

				<nav>
					<?php $this->load->view('comuns/menu'); ?>
				</nav>
			</div>

			<div>
				<h1 style="text-align: center;">Lista de Contatos - Editar</h1>

				<?php if($this->session->flashdata('error') == TRUE): ?>

					<p><?php echo $this->session->flashdata('error'); ?> </p>

				<?php endif; ?>

				
				<?php if($this->session->flashdata('success') == TRUE): ?>

					<p><?php echo $this->session->flashdata('success'); ?> </p>

				<?php endif; ?>

				<form method="post" action="<?php echo base_url('update') ?>" enctype="multipart/form-data">

					<label for="nome">Nome</label>
					<input id="nome" name="nome" value="<?php echo $contato['nome']?>" placeholder="Insira o seu nome"/>

					<label for="email">Email</label>
					<input type="email" id="email" name="email" value="<?php echo $contato['email']?>" placeholder="Insira o seu email"/>
					
					<label>Todos os campos são obrigatórios.</label>
					<input type="hidden" name="id" value="<?php echo $contato['id'] ?>" />

					<input class="btnEnviar" type="submit" value="Editar" />

				</form>

			</div>

		</div>

		
<?php
$this->load->view('comuns/footer');
?>