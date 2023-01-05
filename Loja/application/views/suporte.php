<?php
$this->load->view('comuns/header');
?>
	<body>

		<div id="container">

			<div class="inner">
				<nav>
					<?php $this->load->view('comuns/menu'); ?>
				</nav>
			</div>

		</div><!-- end container -->

			<?php
			/*
				Preenchimento dos campos com os dados passados pelo user.
				O metodo set_value() -> recupera os dados enviados pelo form, utilizado na view.
				O metodo set_value() tem um parametro que e o nome do cmpo, o mesmo usado no atributo name input.
			*/
			?>


			<div class="row div-error-msg">
				<?php if($formErrors) { ?>
				<div class="alert-danger">
					<?php echo $formErrors ?>
				</div>
				<?php 
				} else {  	
					if($this->session->flashdata('success_msg')) {
				?>

				<div>
					<?php echo $this->session->flashdata('success_msg') ?>
					<?php
							}//end if
						}//end else
					?>
					</div>
				</div> <!-- end row -->

			<div class="div-support">

				<h1 class="support-title">Ajuda e Suporte</h1>


				<form class="support-form" method="POST" action="">
					<label for="assunto">Assunto <span style="color: red;">*</span></label>
					<input class="input-support" value="<?php echo set_value('assunto') ?>" id="assunto" name="assunto" placeholder="Insira o assunto aqui"/>
					<label for="mensagem">Mensagem <span style="color: red;">*</span></label>
					<textarea class="input-support" id="mensagem" name="mensagem" rows="3" placeholder="Tente ser o mais breve possível"> </textarea>
					<input class="button-submit" type="submit" value="Enviar" />
				</form>

			</div>
		</div>

<?php
$this->load->view('comuns/footer');
?>