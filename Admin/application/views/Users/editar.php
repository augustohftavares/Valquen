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
                        <h1 class="recent-Articles">Editar utilizador</h1>
                    </div>

                    <!-- error msg -->
					<?php 
						if($this->session->flashdata('error_users') == TRUE)
							echo "<p style='color: red;'" . $this->session->flashdata('error_users') . "</p>";
					?>

                    <form method="post" action="<?php echo base_url('update_users') ?>" enctype="multipart/form-data">

						<label for="firstName">Primeiro Nome</label>
						<input class="inputs-all" id="firstName" name="firstName" value="<?php echo $users['firstName']?>"/>

						<label for="lastName">Último Nome</label>
						<input class="inputs-all" id="lastName" name="lastName" value="<?php echo $users['lastName']?>"/>

						<label for="email">Email</label>
						<input class="inputs-all" id="email" name="email" value="<?php echo $users['email']?>"/>


						<label for="mobile">Telefone</label>
						<input class="inputs-all" id="mobile" name="mobile" value="<?php echo $users['mobile']?>"/>

						<label for="description">Descrição</label>
						<textarea class="inputs-all" id="description" name="description"><?php echo $users['description'] ?></textarea>

						<label for="admin">Admin ?</label>
						<input class="inputs-all" id="admin" name="admin" value="<?php echo $users['admin']?>"/>

						
						<input type="hidden" name="id" value="<?php echo $users['id'] ?>" />
						<input type="hidden" name="lastLogin" value="<?php echo $users['password'] ?>" />
						<input type="hidden" name="registerAt" value="<?php echo $users['registerAt'] ?>" />
						<input type="hidden" name="lastLogin" value="<?php echo $users['lastLogin'] ?>" />

						<span>(0) - Utilizador</span>
						<br />
						<span>(1) - Vendedor</span>
						<br />
						<span>(2) - Admin</span>

						<input class="input-submit" type="submit" value="Atualizar" />

					</form>
					
            	</div>
            </div>
        </div>

<?php
$this->load->view('comuns/footer');
?>