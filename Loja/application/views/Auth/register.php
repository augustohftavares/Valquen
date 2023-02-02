<?php
$this->load->view('comuns/header');
?>

<?php
$this->load->view('comuns/menu');
?>

<div class="row">
  <div class="leftcolumn">

    <div class="cardAuth cardLogin cardRegister">
      <h2>Registo</h2>

      <?php if ($this->session->flashdata('form_error') == TRUE) : ?>
        <?php echo $this->session->flashdata('form_error'); ?>
      <?php endif ?>

      <form action="<?php echo base_url("registar")?>" method="post">

        <label for="title">Title</label><span style="color: red;"> *</span>
        <select name="title">
          <option value="Sr">Sr.</option>
          <option value="Sra">Sra.</option>
          <option value="Srta">Srta.</option>
          <option value="Senhora">Senhora.</option>
        </select>

        <label for="name">Nome</label><span style="color: red;"> *</span>
        <input type="text" name="name" value="<?php ?>" placeholder="Introduza o seu nome própio"/>

        <label for="surname">Apelido</label><span style="color: red;"> *</span>
        <input type="text" name="surname" value="<?php ?>" placeholder="Introduza o seu apelido"/>

        <label for="email">Endereço de e-mail</label><span style="color: red;"> *</span>
        <input type="email" name="email" value="<?php ?>" placeholder="Introduza o seu endereço de e-mail"/>

        <label for="bithday">Data de nascimento(opcional)</label>
        <input type="date" name="bithday" value="<?php ?>"/>

        <label for="password">Palavra-passe</label><span style="color: red;"> *</span>
        <input type="password" name="password" value="<?php ?>" placeholder="Introduza a sua palavra-passe" />

        <p style="margin-left: 20px;">A sua palavra-passe deverá ter pelo menos 6 caracteres.</p>

        <label for="password_confirm">Confirme palavra-passe</label><span style="color: red;"> *</span>
        <input type="password" name="password_confirm" value="<?php ?>" placeholder="Introduza a sua palavra-passe" />

        <p style="margin-left: 20px;">
          Ao clicar em registar-se está a aceitar
          <a class="agreedTerms" href="">Termos e condições</a> e
          <a class="agreedTerms" href="">Política de Segurança</a>,
          <a class="agreedTerms" href="">Privacidade e Cookies</a>
        </p>

        <button type="submit">Registar-se</button>

      </form>

    </div>
  </div>

  <div class="rightcolumn">

    <div class="cardAuth cardNewUser">
      <h2>Vantagens ao juntar-se a nós</h2>
      <p><i class='bx bx-check'></i> Receba ofertas especiais e promoções.</p>
      <p><i class='bx bx-check'></i> Aceda instantaneamente à sua conta.</p>
      <p><i class='bx bx-check'></i> Efetue as suas compras mais depressa.</p>
    </div>

  </div>

</div>

<?php
$this->load->view('comuns/footer');
?>
