<?php
$this->load->view('comuns/header');
?>

<body class="bodyAuth">

  <div class="mainAuth">

    <p class="sign" align="center">Iniciar Sessão</p>
    <?php if ($this->session->flashdata('form_error') == TRUE) : ?>
				<div class="msg_formError">
					<?php echo "<i class='bx bx-right-arrow-alt bx-fade-left' ></i>" . $this->session->flashdata('form_error'); ?>
				</div>
		<?php endif ?>
    <?php if ($this->session->flashdata('login_error') == TRUE) : ?>
				<div class="msg_formError">
					<?php echo "<i class='bx bx-right-arrow-alt bx-fade-left' ></i>" . $this->session->flashdata('login_error'); ?>
				</div>
		<?php endif ?>
    <form class="formAuth" action="<?php echo base_url("entrar") ?>" method="post">

      <label for="email"></label>
      <input class="userEmailAuth" type="text" align="center" name="email" placeholder="Email">

      <label for="password"></label>
      <input class="passAuth" type="password" align="center" name="password" placeholder="Palavra-passe">

      <?php $newDate = new DateTime();?>
      <input type="hidden" name="lastLogin" value="<?php $newDate ?>" />

      <button class="submitAuth linkAuth" type="submit" align="center">Entrar</button>

      <p class="forgotPassAuth" align="center"><a href="<?php echo base_url("") ?>" class="forgotPassAuth">Esqueceste-te da password ?</p>

  </div>

<!-- body end in comuns/footer -->
<?php
$this->load->view('comuns/footer');
?>
