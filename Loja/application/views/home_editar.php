<?php
$this->load->view('comuns/header');
?>
	<body>

		<div id="container">

			<div class="inner">
				<h1 class="menu">EPCC - Lista Contatos</h1>

				<nav>
					<?php $this->load->view('comuns/menu'); ?>
				</nav>
			</div>

			<div>
				<h1 style="text-align: center;">Lista de Contatos</h1>

				<?php if($this->session->flashdata('error') == TRUE): ?>

					<p style="color: red; text-align: center;"><?php echo $this->session->flashdata('error'); ?> </p>

				<?php endif; ?>

				<?php if($this->session->flashdata('success') == TRUE): ?>

					<p style="color: green; text-align: center;"><?php echo $this->session->flashdata('success'); ?> </p>

				<?php endif; ?>

				<form method="post" action="<?php echo base_url('save') ?>" enctype="multipart/form-data">

					<label for="nome">Nome</label>
					<input id="nome" name="nome" value="<?php echo set_value('nome')?>" placeholder="Insira o seu nome"/>

					<label for="email">Email</label>
					<input type="email" id="email" name="email" value="<?php echo set_value('email')?>" placeholder="Insira o seu email"/>

					<input class="btnEnviar" type="submit" value="Save" />

				</form>

			</div>

		</div>

		<div>

			<table id="contatos">
				<caption>Contatos</caption>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Ação</th>
					</tr>
				</thead>

				<tbody>

					<?php if($contatos == FALSE): ?>

						<tr>
							<td colspan="2">Nenhum Contato </td>	
						</tr>

					<?php else: ?>

						<?php foreach ($contatos as $row): ?>

							<tr>
								<td><?php echo $row['id'] ?></td>
								<td><?php echo $row['nome'] ?></td>
								<td><?php echo $row['email'] ?></td>
								<td>
									<a href="<?php echo $row['edit_url'] ?>">[Editar]</a>
									<a href="<?php echo $row['del_url'] ?>">[Eliminar]</a>
								</td>
							</tr>

						<?php endforeach ?>

					<?php endif ?>

				</tbody>

			</table>

		</div>
<?php
$this->load->view('comuns/footer');
?>