<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<div class="card-edit-user">

  <div class="card-image">
    <h2 class="card-heading">
      Editar utilizador
      <small>
        <?php
          if($this->session->flashdata('error') == TRUE)
            echo $this->session->flashdata('error');
        ?>
      </small>
    </h2>
  </div>

  <form class="card-form" action="<?php echo base_url("editar_utilizador_") ?>" method="post">

    <input type="hidden" name="id" value="<?php echo $user['id']?>" />

    <div class="input">
      <input type="text" class="input-field" name="name" value="<?php echo $user['name'] ?>" />
      <label class="input-label" for="name">Nome</label>
    </div>

    <div class="input">
      <input type="text" class="input-field" name="surname" value="<?php echo $user['surname'] ?>" />
      <label class="input-label" for="surname">Apelido</label>
    </div>

    <div class="input">
      <input type="text" class="input-field" name="email" value="<?php echo $user['email'] ?>"/>
      <label class="input-label" for="email">Endereço de e-mail</label>
    </div>

    <div class="input">
      <input type="text" class="input-field" name="phone" value="<?php echo $user['phone'] ?>"/>
      <label class="input-label" for="phone">Telemóvel</label>
    </div>

    <div class="action">
      <button class="action-button">Guardar Alterações</button>
    </div>

  </form>

  <div class="card-info">
    <p>Esta operação deverá ser feita apenas com o consentimento do utilizador.</p>
  </div>
</div>

<?php
$this->load->view('comuns/footer');
?>
