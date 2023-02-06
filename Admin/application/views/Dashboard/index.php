<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
  <div class="rowDash">
    <div class="columnDashboard">
      <div class="cardDashboard">
        <h3><i class='bx bxs-user'></i> Total de utilizadores</h3>
        <p><i class='bx bx-right-arrow-alt' ></i><?php echo $usersTotal; ?></p>
      </div>
    </div>

    <div class="columnDashboard">
      <div class="cardDashboard">
        <h3><i class='bx bxs-shopping-bags' ></i> Total de Produtos</h3>
        <p><i class='bx bx-right-arrow-alt' ></i><?php echo $productsTotal; ?></p>
      </div>
    </div>

    <div class="columnDashboard">
      <div class="cardDashboard">
        <h3><i class='bx bxs-category' ></i> Total de categorias</h3>
        <p><i class='bx bx-right-arrow-alt' ></i>20</p>
      </div>
    </div>

    <div class="columnDashboard">
      <div class="cardDashboard">
        <h3><i class='bx bx-chevrons-up'></i> Total sessões</h3>
        <p><i class='bx bx-right-arrow-alt'></i>123452</p>
      </div>
    </div>

</div>

<?php
$this->load->view('comuns/footer');
?>
