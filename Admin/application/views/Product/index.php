<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>



<h1 class="userPageTitle">Lista de produtos</h1>

<div class="container-products">

  <table>
    <thead>
      <tr>
        <th>Título</th>
        <th>Preço</th>
        <th>Publicado</th>
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
          <td><?php echo $row['title']?></td>
          <td><?php echo $row['price']?></td>
          <td><?php echo $convertDate ?></td>
          <td>
            <a href="<?php echo $row['edit_url'] ?>"><i class='bx bxs-edit'></i></a>
            <a href="<?php echo $row['detail_url'] ?>"><i class='bx bx-detail' ></i></a>
            <a href="<?php echo $row['delete_url'] ?>"><i class='bx bx-message-square-x'></i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>

  </table>

</div>
<?php
$this->load->view('comuns/footer');
?>
