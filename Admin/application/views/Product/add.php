<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>


  <div class="mainEdit">

    <p class="sign" align="center">Adicionar Produto</p>

    <form class="formAuth" action="<?php echo base_url("adicionar_produto_") ?>" method="post">

      <input type="hidden" name="id" value="<?php echo set_value('id')?>" />
      <input type="hidden" name="userId" value="<?php echo $_SESSION['admin_id'] ?>'" />

      <label class="formLabel" for="title">Título:</label>
      <input class="userEmailAuth" type="text" align="center" name="title" value="<?php echo set_value('title')?>" placeholder="Título do produto">

      <label class="formLabel" for="price">Preço:</label>
      <input class="passAuth" type="text" align="center" name="price" value="<?php echo set_value('price')?>" placeholder="Preço do produto">

      <label class="formLabel" for="discount">Promoção/Desconto:</label>
      <input class="passAuth" type="text" align="center" name="discount" value="<?php echo set_value('discount')?>" placeholder="Promoção/Desconto(%)">

      <label class="formLabel" for="quantity">Quantidade:</label>
      <input class="passAuth" type="text" align="center" name="quantity" value="<?php echo set_value('quantity') ?>" placeholder="Quantidade">

      <?php
        date_default_timezone_set('Europe/Lisbon');
				$date = new DateTime();
				$dt= $date->format('Y-m-d H:i:s');
			?>
      <input type="hidden" name="publishedAt" value="<?php echo $dt ?>" />

      <label class="formLabel" for="content">Descrição do produto:</label>
      <textarea class="passAuth" type="text" align="center" name="content" value="<?php echo set_value('content') ?>" placeholder="Descrição do produto"></textarea>


      <button class="submitAuth linkAuth" type="submit" align="center">Adicionar</button>

  </div>

<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
