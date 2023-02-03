<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <div class="mainEdit">

    <p class="sign" align="center">Editar Produto #<?php echo $product['id']?></p>

    <form class="formAuth" action="<?php echo base_url("editar_produto_") ?>" method="post">

      <label class="formLabel" for="title">Título:</label>
      <input class="userEmailAuth" type="text" align="center" name="title" value="<?php echo $product['title'] ?>" placeholder="Título do produto">

      <label class="formLabel" for="price">Preço:</label>
      <input class="passAuth" type="text" align="center" name="price" value="<?php echo $product['price'] ?>" placeholder="Preço do produto">

      <label class="formLabel" for="discount">Promoção/Desconto:</label>
      <input class="passAuth" type="text" align="center" name="discount" value="<?php echo $product['discount'] ?>" placeholder="Promoção/Desconto(%)">

      <label class="formLabel" for="quantity">Quantidade:</label>
      <input class="passAuth" type="text" align="center" name="quantity" value="<?php echo $product['quantity'] ?>" placeholder="Quantidade">

      <label class="formLabel" for="content">Descrição do produto:</label>
      <textarea class="passAuth" type="text" align="center" name="content" value="<?php echo $product['content'] ?>" placeholder="Descrição do produto"><?php echo $product['content'] ?></textarea>

      <label class="formLabel" for="hot">Em destaque:</label>
      <select class="passAuth" name="hot">
        <option value="">
          <?php
            if($product['hot'] == 0)
              echo "Não está em destaque";
            else if($product['hot'] == 1)
              echo "Está em destaque";
          ?>
        </option>
        <option value="0">Não</option>
        <option value="1">Meter em destaque</option>
      </select>

      <input type="hidden" name="id" value="<?php echo $product['id']?>" />
      <input type="hidden" name="userId" value="<?php echo $product['userId']?>" />
      <input type="hidden" name="publishedAt" value="<?php echo $product['publishedAt']?>" />

      <button class="submitAuth linkAuth" type="submit" align="center">Editar</button>

  </div>

<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
