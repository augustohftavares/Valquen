<?php
$this->load->view('comuns/header');
?>

	<body>
		<header>
 
	        <div class="logosec">
	            <div class="logo">Valquen</div>
	            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png" class="icn menuicn" id="menuicn" alt="menu-icon">
	        </div>
 
	        <div class="searchbar">
	            <input type="text" placeholder="Procurar">
	            <div class="searchbtn">
	             	<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"class="icn srchicn"alt="search-icon">
	            </div>
	        </div>
	 
	        <div class="message">
	            <div class="circle"></div>
	            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"class="icn" alt="">
	            <div class="dp">
	             	<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"class="dpicn" alt="dp">
	            </div>
	        </div>
 
    	</header>
 
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"class="nav-img"alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>
 
                    <div class="option2 nav-option">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png" class="nav-img" alt="articles">
                        <h3>Produtos</h3>
                    </div>
 
                    <div class="nav-option option3">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png" class="nav-img" alt="report">
                        <h3> Utilizadores</h3>
                    </div>
 
                    <div class="nav-option option4">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img" alt="report">
                        <h3>Suporte</h3>
                    </div>
 
                    <div class="nav-option option5">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img" alt="perfil">
                        <h3> Perfil</h3>
                    </div>
 
                    <div class="nav-option option6">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"class="nav-img" alt="definições">
                        <h3> Definições</h3>
                    </div>
 
                    <div class="nav-option logout">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img" alt="logout">
                        <h3>Sair</h3>
                    </div>
 
                </div>
            </nav>
        </div>

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