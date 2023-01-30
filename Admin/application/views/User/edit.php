<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <div class="mainEdit">

    <p class="sign" align="center">Editar Utilizador #<?php echo $user['id']?></p>

    <form class="formAuth" action="<?php echo base_url("editar_utilizador_") ?>" method="post">

      <label class="formLabel" for="username">Utilizador:</label>
      <input class="userEmailAuth" type="text" align="center" name="username" value="<?php echo $user['username'] ?>" placeholder="Utilizador">

      <label class="formLabel" for="email">Email:</label>
      <input class="passAuth" type="text" align="center" name="email" value="<?php echo $user['email'] ?>" placeholder="email">

      <label class="formLabel" for="phone">Telemóvel:</label>
      <input class="passAuth" type="text" align="center" name="phone" value="<?php echo $user['phone'] ?>" placeholder="email">

      <label class="formLabel" for="profileTitle">Títudo do perfil:</label>
      <input class="passAuth" type="text" align="center" name="profileTitle" value="<?php echo $user['profileTitle'] ?>" placeholder="título do perfil">

      <label class="formLabel" for="profileDesc">Descrição do perfil:</label>
      <textarea class="passAuth" type="text" align="center" name="profileDesc" value="<?php echo $user['profileDesc'] ?>" placeholder="descrição do perfil"><?php echo $user['profileDesc'] ?></textarea>

      <label class="formLabel" for="cod_postal">Código Postal:</label>
      <input class="passAuth" type="text" align="center" name="cod_postal" value="<?php echo $user['cod_postal'] ?>" placeholder="código postal">

      <input type="hidden" name="id" value="<?php echo $user['id']?>" />

      <button class="submitAuth linkAuth" type="submit" align="center">Atualizar</button>

  </div>

<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
