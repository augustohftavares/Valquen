<?php
$this->load->view('comuns/header');
?>

<?php
$this->load->view('comuns/menu');
?>


<div class="divSlideShow">
  <img class="slideShow" src="<?php echo base_url("assets/img/startpage_banner.png") ?>">
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
