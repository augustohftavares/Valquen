/*
 * Update User Alert
 */
 function userUpdatedSuccess() {
 	Swal.fire({
    position: 'top-end',
   	icon: 'success',
   	title: 'Sucesso',
 		text: 'O Utilizador foi atualizado com sucesso',
   	showConfirmButton: false,
   	timer: 2500,
   	timerProgressBar: true
 	});

 }
