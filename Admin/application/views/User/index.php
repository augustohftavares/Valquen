<?php
$this->load->view('comuns/header');
?>


<?php
$this->load->view('comuns/menu');
?>

<?php
  if($this->session->flashdata('success') == true)
    echo $this->session->flashdata('success');
?>

<h1 class="userPageTitle">Lista de utilizadores</h1>

<div class="container-users">

  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Email</th>
        <th>Telemóvel</th>
        <th>Registo</th>
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
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['surname']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['phone']?></td>
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


<?php
$this->load->view('comuns/footer');
?>
