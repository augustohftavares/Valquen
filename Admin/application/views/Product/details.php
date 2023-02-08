<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<div class="product-card">
  <div class="image-container">
    <div class="cover-image product-image">
      <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80" alt="">
    </div>

  </div>
  <div class="product-info">

    <h3 class="product-name"><?php echo $product['title'] ?></h3>

    <?php if($product['discount'] > 0): ?>

      <p class="regular-price"><?php echo $product['price'] ?>€</p>
      <p class="discount-price"><?php echo $product['discount'] ?>€</p>

    <?php else: ?>

      <p class="discount-price"><?php echo $product['price'] ?>€</p>
      
    <?php endif; ?>

    <p class="offer-info"><?php echo $product['content'] ?></p>
    <ul>
      <li>Cor: <span>Branco</span></li>
      <li>Categoria: <span>Sapatilhas</span></li>
    </ul>

    <div class="stock">
      <?php if($product['quantity'] > 0): ?>
        <div class="stock-status-green"></div>
      <?php else: ?>
        <div class="stock-status-red"></div>
      <?php endif; ?>
      <p class="stock-info">Sem stock</p>

    </div>

    <div class="buttons-product-details">
      <a href="" class="button-see--product-detail">
        Ver na loja
      </a>
    </div>

  </div>
</div>


<?php
$this->load->view('comuns/footer');
?>
