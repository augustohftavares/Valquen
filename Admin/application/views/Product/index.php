<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <div style="">

    <h1 class="userPageTitle">Lista de todos os produdos publicados</h1>

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
        <?php foreach($product as $row): ?>
          <?php
            // DATE FORMAT
            $date = $row['publishedAt'];
            $convertDate = date("d/m/Y", strtotime($date));
          ?>
          <tr>
            <td>[<?php echo $row['id']?>]</td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['discount']?></td>
            <td><?php echo $row['quantity']?></td>
            <td><?php echo $convertDate ?></td>
            <td>
              <a href="<?php echo $row['edit_url'] ?>"><i class='bx bxs-edit'></i></a>
              <a href="<?php echo $row['detail_url'] ?>"><i class='bx bxs-user-detail'></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
  </div>
<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
