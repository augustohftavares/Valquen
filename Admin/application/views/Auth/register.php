<?php
$this->load->view('comuns/header');
?>

<body class="bodyAuth">

  <div class="mainAuth">

    <p class="sign" align="center">Criar conta para administrador</p>
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
    <form class="formAuth" action="<?php echo base_url("registar_conta") ?>" method="post">

      <label for="username"></label>
      <input class="passAuth" type="text" align="center" name="username" placeholder="username">

      <label for="email"></label>
      <input class="userEmailAuth" type="text" align="center" name="email" placeholder="Email">

      <label for="password"></label>
      <input class="passAuth" type="password" align="center" name="password" placeholder="Palavra-passe">

      <label for="password_confirm"></label>
      <input class="passAuth" type="password" align="center" name="password_confirm" placeholder="Confirmar palavra-passe">

      <?php $newDate = new DateTime();?>
      <input type="hidden" name="lastLogin" value="<?php $newDate ?>" />

      <button class="submitAuth linkAuth" type="submit" align="center">Criar conta</button>

  </div>

<!-- body end in comuns/footer -->
<?php
$this->load->view('comuns/footer');
?>
