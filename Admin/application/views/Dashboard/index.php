<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <div class="rowDash">
    <div class="columnDashboard">
      <div class="cardDashboard">
        <h3><i class='bx bxs-user'></i> Total de utilizadores</h3>
        <p><i class='bx bx-right-arrow-alt' ></i>200</p>
      </div>
    </div>

    <div class="columnDashboard">
      <div class="cardDashboard">
        <h3><i class='bx bxs-shopping-bags' ></i> Total de Produtos</h3>
        <p><i class='bx bx-right-arrow-alt' ></i>1000</p>
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

<?php else: ?>

<p class="msgLogIn">Inicia sessão para que possas aceder a esta aplicação</p>

<?php endif; ?>
<?php
$this->load->view('comuns/footer');
?>
