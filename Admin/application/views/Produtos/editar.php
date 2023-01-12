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
                        <h1 class="recent-Articles">Editar produto</h1>
                    </div>

                    <!-- error msg -->
					<?php 
						if($this->session->flashdata('error_products') == TRUE)
							echo "<p style='color: red;'" . $this->session->flashdata('error_products') . "</p>";
					?>

                    <form method="post" action="<?php echo base_url('update') ?>" enctype="multipart/form-data">

						<label for="title">Título</label>
						<input class="inputs-all" id="title" name="title" value="<?php echo $produtos['title']?>"/>

						<label for="details">Detalhes</label>
						<input class="inputs-all" id="details" name="details" value="<?php echo $produtos['details']?>"/>

						<label for="price">Preço</label>
						<input class="inputs-all" id="price" name="price" value="<?php echo $produtos['price']?>"/>
						
						<input class="inputs-all" type="hidden" name="id" value="<?php echo $produtos['id'] ?>" />

						<input class="input-submit" type="submit" value="Atualizar" />

					</form>
					
            	</div>
            </div>
        </div>

<?php
$this->load->view('comuns/footer');
?>