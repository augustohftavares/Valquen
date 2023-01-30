<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<!-- CONTENT HERE-->
<?php if(!$_SESSION['logged_in'] === FALSE): ?>

  <!-- SUCCESS MESSAGES -->
  <?php
		if($this->session->flashdata('success') == true)
			echo $this->session->flashdata('success');
	?>

  <div style="">

    <h1 class="userPageTitle">Lista de todos os utilizadores registados</h1>

    <table class="tableList">

      <thead>
        <tr>
          <th></th>
          <th><i class='bx bxs-user'></i> Utilizador</th>
          <th><i class='bx bxs-envelope'></i> Email</th>
          <th><i class='bx bxs-phone'></i> Telemóvel</th>
          <th><i class='bx bx-barcode'></i> Código Postal</th>
          <th><i class='bx bxs-time'></i> Registado a</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($user as $row): ?>
          <?php
						// DATE FORMAT
						$date = $row['createdAt'];
						$convertDate = date("d/m/Y", strtotime($date));
					?>
          <tr>
            <td>#<?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['cod_postal']?></td>
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
