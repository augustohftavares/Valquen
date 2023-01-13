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
                        <h1 class="recent-Articles">Lista de todos os produtos</h1>
                        <button class="view" onclick="location.href='<?php echo base_url("add") ?>'">Adicionar</button>
                    </div>

                    <?php 
                        if($this->session->flashdata('success') == TRUE) 
                            echo $this->session->flashdata('success');
                    ?>
     
                    <table id="table">
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Título</th>
                                <th>Preço</th>
                                <th style="text-align: right;">Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if($produtos == FALSE): ?>

                                <tr>
                                    <td colspan="2">Não existe nenhum produto à venda</td>    
                                </tr>

                            <?php else: ?>

                            <?php foreach ($produtos as $row): ?>

                                <tr>
                                    <td><?php ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td class="t-op-nextlvl lavel-tag"><?php echo $row['price'] ?> EUR</td>
                                    <td style="text-align: right;">
                                        <a href="<?php echo $row['edit_url'] ?>">Editar</a>
                                        <a href="<?php echo $row['del_url'] ?>" onclick="return confirm('Pretendes mesmo eliminar este produto ?');">Eliminar</a>
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