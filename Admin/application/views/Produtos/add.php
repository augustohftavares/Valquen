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
                        <h1 class="recent-Articles">Adicionar produto</h1>
                    </div>

                    <!-- error msg -->
					<?php 
						if($this->session->flashdata('error') == TRUE)
							echo "<p style='color: red;'" . $this->session->flashdata('error') . "</p>";
					?>

                    </p>
                    <form method="post" action="<?php echo base_url('save') ?>">

						<label for="title">Título</label>
						<input class="inputs-all" id="title" name="title" value="<?php echo set_value('title')?>" placeholder="Insira o título do produto"/>

						<label for="price">Preço</label>
						<input class="inputs-all" id="price" name="price" value="<?php echo set_value('price')?>" placeholder="Insira o preço do produto"/>

						<label for="details">Detalhes</label>
						<input class="inputs-all" id="details" name="details" value="<?php echo set_value('details')?>" placeholder="Insira os detalhes do produto"/>

						<input class="inputs-all" type="hidden" id="userId" name="userId" value="1" />
						<input class="input-submit" type="submit" value="Adicionar" />

					</form>
					
            	</div>
            </div>
        </div>

<?php
$this->load->view('comuns/footer');
?>