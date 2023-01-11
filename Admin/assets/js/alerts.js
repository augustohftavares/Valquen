var menuicn = document.querySelector(".menuicn");
var nav = document.querySelector(".navcontainer");

menuicn.addEventListener('click', function() {
	nav.classList.toggle("navclose");
})



/*
 * PRODUCTS ALERTS
 */
function productAddSuccess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Sucesso',
  		text: 'O produto foi adicionado com sucesso.',
  		showConfirmButton: false,
  		timer: 2000,
  		timerProgressBar: true
	})
}

function productAddError() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'error',
  		title: 'Erro',
  		text: 'Tenta novamente, verifica os campos antes de tentares adicionar!',
  		showConfirmButton: false,
  		timer: 2000,
  		timerProgressBar: true
	})
}

function productUpdatedSuccess() {
	Swal.fire({
  		position: 'top-end',
  		icon: 'success',
  		title: 'Sucesso',
  		text: 'O produto foi atualizado com sucesso.',
  		showConfirmButton: false,
  		timer: 2000,
  		timerProgressBar: true
	})
}


/*
 * USERS ALERTS
 */
