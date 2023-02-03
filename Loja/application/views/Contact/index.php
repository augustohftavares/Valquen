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
      <h2>Atendimento ao Cliente</h2>

      <?php
        if ($this->session->flashdata('login_error') == TRUE)
          echo $this->session->flashdata('login_error');
      ?>

      <form action="<?php echo base_url("enviar")?>" method="post">

        <label for="name">Nome</label><span style="color: red;"> *</span>
        <input type="text" name="name" value="<?php ?>" placeholder="Introduza o seu nome própio"/>

        <label for="email">Apelido</label><span style="color: red;"> *</span>
        <input type="text" name="email" value="<?php ?>" placeholder="Introduza o seu apelido"/>

        <label for="email">Endereço de e-mail</label><span style="color: red;"> *</span>
        <input type="email" name="email" value="<?php ?>" placeholder="Introduza o seu endereço de e-mail"/>

        <label for="theme">Tema</label><span style="color: red;"> *</span>
        <select name="theme">
          <option>Selecione um tema</option>
          <option value="Sugestões e Elogios">Sugestões e Elogios</option>
          <option value="Questões sobre a minha compra">Questões sobre a minha compra</option>
          <option value="Trocas e devoluções de produtos">Trocas e devoluções de produtos</option>
          <option value="Outras informações">Outras informações</option>
        </select>

        <label for="msg">Mensagem</label><span style="color: red;"> *</span>
        <textarea name="msg" rows="10"></textarea>

        <button type="submit">Enviar</button>

      </form>

    </div>
  </div>

  <div class="rightcolumn">

    <div class="cardAuth cardNewUser">
      <h2>Outras formas</h2>
      <p><i class='bx bxs-phone'></i> 964920117 (Todos os dias das 10h às 20h)</p>
      <p><i class='bx bxs-book'></i> <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">Livro de reclamações</a></p>
      <p><i class='bx bxs-conversation'></i> <a href="<?php echo base_url("chat")?>"> Chat</a></p>
    </div>

  </div>

</div>

<?php
$this->load->view('comuns/footer');
?>
