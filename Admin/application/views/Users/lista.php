<?php
$this->load->view('comuns/header');
?>

	<body>
		<?php
            $this->load->view('comuns/menu_header');
        ?>

		<div class="main-container">
			<?php
                $this->load->view('comuns/menu');
            ?>
            
            <div class="main">
            	<div class="report-container">

                    <div class="report-header">
                        <h1 class="recent-Articles">Lista de todos os utilizadores</h1>
                    </div>

                    <?php 
                        if($this->session->flashdata('success') == TRUE) 
                            echo $this->session->flashdata('success');
                    ?>

                    <table id="table">
                        <thead>
                            <tr>
                                <th>Primeiro Nome</th>
                                <th>Último Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Registado em</th>
                                <th>Último login</th>
                                <th>Cargo</th>
                                <th style="text-align: right;">Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if($users == FALSE): ?>

                                <tr>
                                    <td colspan="2">Não existe nenhum utilizador registado</td>    
                                </tr>

                            <?php else: ?>

                                <?php foreach ($users as $row): ?>

                                    <p>
                                        <?php
                                            
                                        ?>

                                    </p>

                                    <tr>
                                        <td><?php echo $row['firstName'] ?></td>
                                        <td><?php echo $row['lastName'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['mobile'] ?></td>
                                        <td>
                                            <?php 
                                                $date = $row['registerAt'];
                                                $convertDate = date("d-m-Y H:i", strtotime($date));
                                                echo $convertDate . "h"; 
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $date = $row['lastLogin'];
                                                $convertDate = date("d-m-Y H:i", strtotime($date));
                                                echo $convertDate . "h"; 
                                            ?>
                                        </td>

                                        <td>
                                            <?php 
                                                if($row['admin'] == 0)
                                                    echo "<span style='color: gray;'>[Utilizador]</span>";
                                                else if($row['admin'] == 1)
                                                    echo "<span style='color: green;'>[Vendedor]</span>";
                                                else if($row['admin'] == 2)
                                                    echo "<span style='color: red;'>[Admin]</span>";
                                            ?>
                                        </td>

                                        <td style="text-align: right;">
                                            <a href="<?php echo $row['edit_url'] ?>">Editar</a>
                                            <a href="<?php echo $row['del_url'] ?>" onclick="return confirm('Pretendes mesmo eliminar este utilizador ?');">Eliminar</a>
                                        </td>
                                    </tr>

                                <?php endforeach ?>

                            <?php endif ?>

                        </tbody>
                    </table>
                </div>
            </div>
		</div>

<?php
$this->load->view('comuns/footer');
?>