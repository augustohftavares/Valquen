<?php
$this->load->view('comuns/header');
?>

<body class="bodyAuth">

  <div class="mainAuth">

    <p class="sign" align="center">Iniciar Sessão</p>
    <?php
      if ($this->session->flashdata('login_error') == TRUE)
        echo $this->session->flashdata('login_error');
    ?>
    <form class="formAuth" action="<?php echo base_url("entrar") ?>" method="post">

      <label for="email"></label>
      <input class="userEmailAuth" type="text" align="center" name="email" placeholder="Email">

      <label for="password"></label>
      <input class="passAuth" type="password" align="center" name="password" placeholder="Palavra-passe">

      <?php $newDate = new DateTime();?>
      <input type="hidden" name="lastLogin" value="<?php $newDate ?>" />

      <button class="submitAuth linkAuth" type="submit" align="center">Entrar</button>
    </form>

    <p class="infoMsgLogin"><i class='bx bxs-error'></i> Esta aplicação deverá ser acessada apenas por administradores da Valquen Solutions.</p>
  </div>

<!-- body end in comuns/footer -->
<?php
$this->load->view('comuns/footer');
?>
