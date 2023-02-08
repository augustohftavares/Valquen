<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>
<?php /* ?>
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
*/ ?>
  <div class="card-edit-user">

    <div class="card-image">
      <h2 class="card-heading">
        Editar Produto
        <small>
          <?php
            if($this->session->flashdata('error') == TRUE)
              echo $this->session->flashdata('error');
          ?>
        </small>
      </h2>
    </div>

    <form class="card-form" action="<?php echo base_url("editar_produto_") ?>" method="post">

      <input type="hidden" name="id" value="<?php echo $product['id']?>" />

      <div class="input">
        <input type="text" class="input-field" name="title" value="<?php echo $product['title'] ?>" />
        <label class="input-label" for="title">Título</label>
      </div>

      <div class="input">
        <input type="text" class="input-field" name="price" value="<?php echo $product['price'] ?>" />
        <label class="input-label" for="price">Apelido</label>
      </div>

      <div class="input">
        <input type="text" class="input-field" name="discount" value="<?php echo $product['discount'] ?>"/>
        <label class="input-label" for="discount">Desconto</label>
      </div>

      <div class="input">
        <input type="text" class="input-field" name="quantity" value="<?php echo $product['quantity'] ?>"/>
        <label class="input-label" for="quantity">Quantidade</label>
      </div>

      <div class="input">
        <label class="input-label" for="hot">Em destaque:</label>
        <select class="input-field select-field" name="hot">
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
      </div>

      <div class="action">
        <button class="action-button">Guardar Alterações</button>
      </div>

    </form>

  </div>
<?php
$this->load->view('comuns/footer');
?>
