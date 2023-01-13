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
                        <h1 class="recent-Articles">Detalhes do pedido de ajuda #<?php echo $suportes['id']?></h1>
                    </div>

                    <ul id="supportDetails">
                    	<li>
                    		<b>Utilizador:</b> 
                    		<?php echo $suportes['userName']?>
                    	</li>
                    	<li>
                    		<b>Tema:</b> 
                    		<?php echo $suportes['theme']?>
                    	</li>
                    	<li>
                    		<b>Criado em:</b> 
                    		<?php 
								$date = $suportes['createdAt'];
								$convertDate = date("d-m-Y H:i", strtotime($date));
								echo $convertDate . "h"; 
							?>
                    	</li>
                    	<li>
                    		<b>Status:</b> 
                    		<?php if($suportes['status'] == "pendente"): ?>
                    			<span class="pedidoPendente"><?php echo $suportes['status'] ?></span>
                    		<?php elseif($suportes['status'] == "resolvido"): ?>
                    			<span class="pedidoResolvido"><?php echo $suportes['status'] ?></span>
                             <?php endif ?>
                    	</li>
                    	<li>
                    		<b>Descrição do problema:</b> 
                    		<?php echo $suportes['problemDesc']?>
                    	</li>
                    </ul>


					
            	</div>
            </div>
        </div>

<?php
$this->load->view('comuns/footer');
?>

