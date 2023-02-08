<?php
$this->load->view('comuns/header');
?>

<?php
$this->load->view('comuns/menu');
?>


<div class="divSlideShow">
  <img class="slideShow" src="https://img.freepik.com/vetores-gratis/banner-do-site-de-venda-da-black-friday-com-respingos-de-branco_1361-3062.jpg?w=2000">
</div>

<div class="category-menu">
  <div class="category-links">
    <a href="<?php echo base_url("")?>">Acessórios de inverno</a>
    <a href="<?php echo base_url("")?>">Futebol</a>
    <a href="<?php echo base_url("")?>">Treino</a>
    <a href="<?php echo base_url("")?>">Corrida</a>
    <a href="<?php echo base_url("")?>">Caminhada</a>
    <a href="<?php echo base_url("")?>">Jogos</a>
    <a href="<?php echo base_url("")?>">Música</a>
  </div>
</div>

<h2 class="popularTitle">Produtos Populares</h2>

<div class="Items">

  <?php foreach ($hotProducts as $row): ?>

    <div class="Item">

      <a href="<?php echo base_url("") ?>" class="Item__link">

        <div class="ImageContainer">
          <img src="https://www.prada.com/content/dam/pradabkg_products/2/29Y/29Y088/11WPF0002/29Y088_11WP_F0002_S_222_SLF.jpg/jcr:content/renditions/cq5dam.web.hebebed.1000.1000.crop.jpg" alt="" class="Image">
          <div class="overlay">Ver</div>
        </div>

        <div class="Item__title"><?php echo $row->title ?></div>
        <div class="Item__price">€<?php echo $row->price ?></div>

      </a>

    </div>

  <?php endforeach; ?>


</div>

<div class="divMarcas" id="marcas">
  <div class="divMarcasSize">
    <h2>Marcas</h2>
      <div class="marcasColumn">
        <a href="<?php echo base_url("")?>">
          <div class="cardMarcas">
            <!-- img 300x300 -->
            <img src="<?php echo base_url("assets/img/marcas/louisvuitton.jpg")?>" alt="nike" />
          </div>
        </a>
      </div>
      <div class="marcasColumn">
        <a href="<?php echo base_url("")?>">
          <div class="cardMarcas">
            <!-- img 300x300 -->
            <img src="<?php echo base_url("assets/img/marcas/ralphlauren.png")?>" alt="adidas" />
          </div>
        </a>
      </div>
      <div class="marcasColumn">
        <a href="<?php echo base_url("")?>">
          <div class="cardMarcas">
            <!-- img 300x300 -->
            <img src="<?php echo base_url("assets/img/marcas/balenciaga.jpg")?>" alt="balenciaga" />
          </div>
        </a>
      </div>
      <div class="marcasColumn">
        <a href="<?php echo base_url("")?>">
          <div class="cardMarcas">
            <!-- img 300x300 -->
            <img src="<?php echo base_url("assets/img/marcas/prada.png")?>" alt="prada" />
          </div>
        </a>
      </div>
  </div>

</div>

<div class="divInform">
  <div class="divInformSize">
    <div class="informColumn">
      <div class="cardInform">
        <i class='bx bxs-rocket'></i>
        <h3>Seguro & Rápido</h3>
      </div>
    </div>
    <div class="informColumn">
      <div class="cardInform">
        <i class='bx bxs-truck'></i>
        <h3>Entrega Gratuíta</h3>
      </div>
    </div>
    <div class="informColumn">
      <div class="cardInform">
        <i class='bx bx-shield-quarter'></i>
        <h3>110% Original</h3>

      </div>
    </div>
    <div class="informColumn">
      <div class="cardInform">
        <i class='bx bxs-calendar'></i>
        <h3>Retorno Gratuito</h3>
      </div>
    </div>
  </div>

</div>

<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("slideShow");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 10000); // Change image every 2 seconds
}
</script>
<?php
$this->load->view('comuns/footer');
?>
