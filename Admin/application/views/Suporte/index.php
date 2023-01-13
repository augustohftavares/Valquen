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
                        <h1 class="recent-Articles">Lista de todos os pedidos de ajuda</h1>
                    </div>

                    <table id="table">
                        <thead>
                            <tr>
                                <th>Suporte ID</th>
                                <th>Utilizador</th>
                                <th>Tema</th>
                                <th>Criado em</th>
                                <th>Status</th>
                                <th style="text-align: right;">Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if($suportes == FALSE): ?>

                                <tr>
                                    <td colspan="2">Não existe nenhum pedido de ajuda.</td>    
                                </tr>

                            <?php else: ?>

                            <?php foreach ($suportes as $row): ?>

                                <tr>
                                    <td>#<?php echo $row['id'] ?></td>
                                    <td><?php echo $row['userName'] ?></td>
                                    <td><?php echo $row['theme'] ?></td>
                                    <td>
                                        <?php 
                                                $date = $row['createdAt'];
                                                $convertDate = date("d-m-Y H:i", strtotime($date));
                                                echo $convertDate + "h"; 
                                        ?>
                                            
                                    </td>
                                    <td>
                                        <?php if($row['status'] == "pendente"): ?>
                                            <p class="pedidoPendente"><?php echo $row['status'] ?></p>
                                        <?php elseif($row['status'] == "resolvido"): ?>
                                            <p class="pedidoResolvido"><?php echo $row['status'] ?></p>
                                        <?php endif ?>
                                        
                                    </td>
                                    <td style="text-align: right;">
                                        <a href="<?php echo $row['edit_url'] ?>">Ver</a>
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