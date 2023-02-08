<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<?php
// DATE FORMAT
$date1 = $user['createdAt'];
$date2 = $user['lastLogin'];
$createdAt = date("d/m/Y", strtotime($date1));
$lastLogin = date("d/m/Y", strtotime($date2));

?>


<div class="card">
  <div class="cover-bg"></div>
  <div class="user-info-wrap">
    <div class="user-photo"></div>
    <div class="user-info">
      <div class="user-name"><?php echo $user['name'] . " " . $user['surname'] ?></div>
      <div class="user-title">Registado/a a: <?php echo $createdAt ?></div>
      <div class="user-title">Último login: <?php echo $lastLogin ?></div>
    </div>
  </div>
  <div class="user-bio">
    <p><i class='bx bxs-envelope'></i> <?php echo $user['email']?></p>
    <p><i class='bx bxs-phone'></i> <?php echo $user['phone']?></p>
    <p>Endereço 1: <?php echo $user['adress_one']?></p>
    <p>Endereço 2: <?php echo $user['adress_two']?></p>
    <p>Código Postal: <?php echo $user['zip_code']?></p>

  </div>
</div>
</div>

<?php
$this->load->view('comuns/footer');
?>
