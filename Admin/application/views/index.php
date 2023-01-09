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
     
                <div class="searchbar2">
                    <input type="text" name="" id="" placeholder="Procurar">
                    <div class="searchbtn">
                      	<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn"alt="search-button">
                    </div>
                </div>
     
                <div class="box-container">
     
                    <div class="box box1">
                        <div class="text">
                            <h2 class="topic-heading">0</h2>
                            <h2 class="topic">Total de vistas (produtos)</h2>
                        </div>
     
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"alt="Views">
                    </div>
     
                    <div class="box box2">
                        <div class="text">
                            <h2 class="topic-heading">0</h2>
                            <h2 class="topic">Gostos</h2>
                        </div>
     
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" alt="likes">
                    </div>
     
                    <div class="box box3">
                        <div class="text">
                            <h2 class="topic-heading">0</h2>
                            <h2 class="topic">Comentários</h2>
                        </div>
     
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png" alt="comments">
                    </div>
     
                    <div class="box box4">
                        <div class="text">
                            <h2 class="topic-heading">0</h2>
                            <h2 class="topic">Publicados</h2>
                        </div>
     
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                    </div>
                </div>
     
                <div class="report-container">

                    <div class="report-header">
                        <h1 class="recent-Articles">Produtos recentes</h1>
                        <button class="view">Ver tudo</button>
                    </div>
     
                    <div class="report-body">
                        <div class="report-topic-heading">
                            <h3 class="t-op">Produto</h3>
                            <h3 class="t-op">Vistas</h3>
                            <h3 class="t-op">Comentários</h3>
                            <h3 class="t-op">Estado</h3>
                        </div>
     
                        <div class="items">

                            <div class="item1">
                                <h3 class="t-op-nextlvl">Produto 0</h3>
                                <h3 class="t-op-nextlvl">0</h3>
                                <h3 class="t-op-nextlvl">0</h3>
                                <h3 class="t-op-nextlvl lavel-tag">Teste</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
$this->load->view('comuns/footer');
?>