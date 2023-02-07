<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-
<div class="rowDash">
<div class="columnDashboard">
<div class="cardDashboard">
<h3><i class='bx bxs-user'></i> Total de utilizadores</h3>
<p><i class='bx bx-right-arrow-alt' ></i><?php echo $usersTotal; ?></p>
</div>
</div>
-->

<main class="page-content">
  <div class="card">
    <div class="content">
      <h2 class="title">Utilizadores</h2>
      <p class="copy">A Valquen tem um total de X utilizadores</p>
      <button class="btn">Ver</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Produtos</h2>
      <p class="copy">A Valquen tem um total de X produtos</p>
      <button class="btn">View Trips</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Sessões</h2>
      <p class="copy">A Valquen tem um total de X sessões</p>
      <button class="btn">Book Now</button>
    </div>
  </div>
  <div class="card">
    <div class="content">
      <h2 class="title">Explore The Galaxy</h2>
      <p class="copy">Seriously, straight up, just blast off into outer space today</p>
      <button class="btn">Book Now</button>
    </div>
  </div>
</main>
<?php
$this->load->view('comuns/footer');
?>
