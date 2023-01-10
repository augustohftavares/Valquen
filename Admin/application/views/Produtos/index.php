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
                        <h1 class="recent-Articles">Gerenciador de produtos</h1>
                    </div>

                    <div class="box-container" style="margin-top: 20px;">
     
                    <a href="<?php echo base_url("lista") ?>">
                        <div class="box box1">
                            <div class="text">
                                <h2 class="topic">Ver todos os produtos</h2>
                            </div>
                        </div>
                    </a>

                    <a href="<?php echo base_url("insert") ?>">
                        <div class="box box2">
                            <div class="text">
                                <h2 class="topic">Adicionar produto</h2>
                            </div>
         
                        </div>
                    </a>
     
                    <div class="box box4">
                        <div class="text">
                            <h2 class="topic">Analisar produtos pendentes dos vendedores</h2>
                        </div>
                    </div>
                </div>
     
            </div>

		</div>

<?php
$this->load->view('comuns/footer');
?>