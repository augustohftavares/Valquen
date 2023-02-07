<?php
  $this->load->view('comuns/header');
?>

<?php
  $this->load->view('comuns/menu');
?>

<div class="container">

  <div id="st-box">

    <div class="sidebarAccountSettings">
      <a href=""><i class='bx bxs-user'></i> Editar informações pessoais</a>
      <hr />
      <a href=""><i class='bx bxs-lock-alt'></i> Alterar palavra-passe</a>
      <hr />
      <a href=""><i class='bx bx-mail-send'></i> Alterar endereços</a>
      <hr />
      <a href="<?php echo base_url("terminar_sessao")?>"><i class='bx bx-log-in'></i> Terminar Sessão</a>
    </div>

  </div>


  <div id="nd-box">

    <h2>Editar informações Pessoais</h2>

    <form action="<?php echo base_url("")?>" method="post">

      <label for="email"><i class='bx bxs-envelope'></i> Endereço de e-mail</label>
      <input type="text" name="email" value="<?php echo $this->session->userdata['userinfo']['email'] ?>" readonly/>

      <label for="name"><i class='bx bxs-user'></i >Nome</label>
      <input type="text" name="name" value="<?php echo $this->session->userdata['userinfo']['name'] ?>" />

      <label for="surname"><i class='bx bx-user'></i> Apelido</label>
      <input type="text" name="surname" value="<?php echo $this->session->userdata['userinfo']['surname'] ?>" />

      <label for="phone"><i class='bx bxs-phone'></i> Telemóvel</label>
      <input type="text" name="phone" value="<?php echo $this->session->userdata['userinfo']['phone'] ?>" />

      <button type="submit">Guardar Alterações <i class='bx bx-chevron-right'></i></button>

    </form>



  </div>

</div>


<?php
  $this->load->view('comuns/footer');
?>
