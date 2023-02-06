<?php
$this->load->view('comuns/header');
?>

<?php
$this->load->view('comuns/menu');
?>

<div class="row">
  <div class="leftcolumn">

    <div class="cardAuth cardLogin">
      <h2>Já se encontra registado?</h2>

      <?php
        if ($this->session->flashdata('login_error') == TRUE)
          echo $this->session->flashdata('login_error');
      ?>

      <form action="<?php echo base_url("entrar")?>" method="post">

        <label for="email">Endereço de e-mail</label>
        <input type="email" name="email" value="<?php ?>" placeholder="Introduza o seu endereço de e-mail"/>

        <label for="password">Palavra-passe</label>
        <input type="password" name="password" value="<?php ?>" placeholder="Introduza a sua palavra-passe" />

        <p><a class="dontRememberPw" href="">Não se lembra da sua palavra-passe?</a></p>

        <button type="submit">Iniciar Sessão</button>

      </form>

    </div>
    <p class="termsConditionsText">This website is secure and your personal details are protected. For more information, view our
      <a href="<?php echo base_url("")?>">Terms & Conditions</a> and our
      <a href="<?php echo base_url("")?>">Security, Privacy & Cookie Policy.</a>
    </p>

  </div>

  <div class="rightcolumn">

    <div class="cardAuth cardNewUser">
      <h2>Novo utilizador?</h2>
      <p><i class='bx bx-check'></i> Receba ofertas especiais e promoções.</p>
      <p><i class='bx bx-check'></i> Aceda instantaneamente à sua conta.</p>
      <p><i class='bx bx-check'></i> Efetue as suas compras mais depressa.</p>
      <a class="linkRegPage" href="<?php echo base_url("registo") ?>"><button>Registar-se</button></a>
    </div>

  </div>


</div>

<?php
$this->load->view('comuns/footer');
?>
