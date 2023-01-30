<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <div class="cardUserDetail">
    <img src="<?php echo base_url("assets/img/augusto.png") ?>" alt="<?php echo $user['username'] ?>" style="width:100%">
      <h1><?php echo $user['profileTitle'] ?></h1>
      <p><?php echo $user['profileDesc'] ?></p>
      <p><i class='bx bxs-envelope'></i> <?php echo $user['email'] ?></p>
      <p><i class='bx bxs-phone'></i> <?php echo $user['phone'] ?></p>
      <p><i class='bx bx-barcode'></i> <?php echo $user['cod_postal'] ?></p>
      <p><i class='bx bxs-time'></i> Registado a: <?php echo $user['createdAt'] ?></p>
      <p><i class='bx bxs-time-five'></i> Último login: <?php echo $user['lastLogin'] ?></p>
      <div style="margin: 24px 0;">
        <a href="<?php ?>"><i class='bx bxl-facebook-square'></i></a>
        <a href="<?php ?>"><i class='bx bxl-instagram'></i></a>
        <a href="<?php ?>"><i class='bx bxl-twitter'></i></a>
      </div>
      <a href="<?php echo base_url("utilizadores") ?>">
        <button>Voltar atrás</button>
      </a>
  </div>

<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
