<?php
$this->load->view('comuns/header');
?>

<?php
$this->load->view('comuns/menu');
?>

<!-- THIS PAGE USE THE AUTH.CSS -->

<div class="row">

  <div class="leftcolumn">

    <div class="cardAuth cardContact">
      <h2><i class='bx bx-headphone'></i> Atendimento ao Cliente</h2>


      <?php
        if($this->session->flashdata('error') == TRUE)
          echo '<span class="formErrorr"><i class="bx bxs-chevron-right bx-fade-left"></i>' . $this->session->flashdata('error') . '</span>';
        else if($this->session->flashdata('success') == TRUE)
          echo '<span class="formSuccess"><i class="bx bx-check"></i> ' . $this->session->flashdata('success') . '</span>';
      ?>

      <form action="<?php echo base_url("enviar_formulario")?>" method="post">

        <label for="user_name">Nome</label><span style="color: red;"> *</span>
        <input type="text" name="user_name" value="<?php echo $this->session->userdata['userinfo']['name']; ?>" placeholder="Introduza o seu nome própio"/>

        <label for="user_surname">Apelido</label><span style="color: red;"> *</span>
        <input type="text" name="user_surname" value="<?php echo $this->session->userdata['userinfo']['surname']; ?>" placeholder="Introduza o seu apelido"/>

        <label for="user_email">Endereço de e-mail</label><span style="color: red;"> *</span>
        <input type="email" name="user_email" value="<?php echo $this->session->userdata['userinfo']['email']; ?>" placeholder="Introduza o seu endereço de e-mail"/>

        <label for="theme">Tema</label><span style="color: red;"> *</span>
        <select name="theme">
          <option value="">Selecione um tema</option>
          <option value="Sugestões e Elogios">Sugestões e Elogios</option>
          <option value="Questões sobre a minha compra">Questões sobre a minha compra</option>
          <option value="Trocas e devoluções de produtos">Trocas e devoluções de produtos</option>
          <option value="Outras informações">Outras informações</option>
        </select>

        <label for="message">Mensagem</label><span style="color: red;"> *</span>
        <textarea name="message" rows="10"></textarea>

        <?php
          date_default_timezone_set('Europe/Lisbon');
					$date = new DateTime();
					$sentOn = $date->format('Y-m-d H:i:s');
				?>
        <input type="hidden" name="sentOn" value="<?php echo $sentOn;?>" />

        <button type="submit">Enviar</button>

      </form>

    </div>
  </div>

  <div class="rightcolumn">

    <div class="cardAuth cardNewUser">
      <h2><i class='bx bxs-help-circle'></i> Outras formas</h2>
      <p><i class='bx bxs-phone'></i> 964920117 (Todos os dias das 10h às 20h)</p>
      <p><i class='bx bxs-book'></i> <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">Livro de reclamações</a></p>
      <p><i class='bx bxs-conversation'></i> <a href="<?php echo base_url("chat")?>"> Chat</a></p>
    </div>

  </div>

</div>

<?php
$this->load->view('comuns/footer');
?>
