<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <div class="cardUserDetail">
    <?php
			// DATE FORMAT
			$date = $product['publishedAt'];
			$convertDate = date("d/m/Y", strtotime($date));
		?>
    <img src="<?php echo base_url("assets/img/augusto.png") ?>" alt="<?php echo $product['title'] ?>" style="width:100%">
      <h1><?php echo $product['title'] ?></h1>
      <p>Preço: <?php echo $product['price'] ?> <i class='bx bx-money'></i></p>
      <p>Desconto/Promoção: <?php echo $product['discount'] ?>%</p>
      <p>Quantidade: <?php echo $product['quantity'] ?> <i class='bx bxs-package' ></i></p>
      <p><i class='bx bxs-time' ></i> <?php echo $convertDate ?></p>
      <a href="<?php echo base_url("produtos") ?>">
        <button>Voltar atrás</button>
      </a>
  </div>

<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
