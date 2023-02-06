<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

  <div style="">

    <h1 class="userPageTitle">Lista de todos os produdos publicados</h1>

    <a class="btnAdd" href="<?php echo base_url("adicionar_produto") ?>"><i class='bx bxs-cart-add' ></i></a>

    <table class="tableList">
      <thead>
        <tr>
          <th></th>
          <th><i class='bx bxs-tag-alt'></i> Título</th>
          <th><i class='bx bxs-purchase-tag-alt'></i> Preço</th>
          <th><i class='bx bxs-discount'></i> Desconto</th>
          <th><i class='bx bxs-component'></i> Quantidade</th>
          <th><i class='bx bxs-time'></i> Publicado a</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php if($product == FALSE): ?>
          <tr>
            <td>#</td>
            <td>Não existe nenhum produto ainda!</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

        <?php else: ?>
          <?php foreach($product as $row): ?>
            <?php
              // DATE FORMAT
              $date = $row['publishedAt'];
              $convertDate = date("d/m/Y", strtotime($date));
            ?>
            <tr>
              <td>#<?php echo $row['id']?></td>
              <td><?php echo $row['title']?></td>
              <td><?php echo $row['price']?></td>
              <td><?php echo $row['discount']?></td>
              <td><?php echo $row['quantity']?></td>
              <td><?php echo $convertDate ?></td>
              <td>
                <a href="<?php echo $row['edit_url'] ?>"><i class='bx bxs-edit'></i></a>
                <a href="<?php echo $row['detail_url'] ?>"><i class='bx bx-detail' ></i></a>
                <a href="<?php echo $row['delete_url'] ?>"><i class='bx bx-message-square-x'></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>

    </table>
  </div>
<?php
$this->load->view('comuns/footer');
?>
