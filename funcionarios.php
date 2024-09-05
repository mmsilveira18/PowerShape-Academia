<!DOCTYPE html>
<html lang="en" class="sticky-header-reveal">

<?php include 'header.php' ?>

<body>

	<div class="body">
		<?php include 'cabecalho.php'; ?>


		<div role="main" class="main">

			<section class="section section-no-border section-light custom-padding-top-1 mb-0">
				<div class="container">
					<div class="row mt-4">
						<div class="col">
							<br>
							<h1 class="font-weight-bold text-color-primary mb-0">Funcionários</h1>

							<p>Saiba mais sobre os nossos professores</p>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-quaternary section-center section-no-border m-0">
				<div class="container">

					<div class="row justify-content-center mb-4 mb-md-0 mb-lg-5">
						<?php
						// Defina um array com informações de todos os professores
						$professores = [
							[
								'nome' => 'Jessica',
								'imagem' => 'img/staff-1.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Jessica.'
							],
							[
								'nome' => 'Barbara',
								'imagem' => 'img/staff-2.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Barbara.'
							],
							[
								'nome' => 'Monica',
								'imagem' => 'img/staff-3.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Monica.'
							],
							[
								'nome' => 'Rachel',
								'imagem' => 'img/staff-4.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Rachel.'
							],
							[
								'nome' => 'Angelina',
								'imagem' => 'img/staff-5.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Angelina.'
							],
							[
								'nome' => 'Judy',
								'imagem' => 'img/staff-6.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Judy.'
							],
							[
								'nome' => 'Gustavo',
								'imagem' => 'img/staff-7.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Gustavo.'
							],
							[
								'nome' => 'Thiago',
								'imagem' => 'img/staff-8.jpg',
								'funcao' => 'Personal Trainer',
								'detalhes' => 'Detalhes sobre Thiago.'
							],

							// Adicione informações para outros professores aqui
						];

						// Loop pelos professores
						foreach ($professores as $professor) {
							echo '<div class="col-md-6 pb-3 col-lg-3">';
							echo '<span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">';
							echo '<span class="thumb-info-wrapper m-0">';
							echo '<img src="' . $professor['imagem'] . '" class="img-fluid" alt="">';
							echo '</span>';
							echo '<span class="thumb-info-caption bg-color-light text-center p-5">';
							echo '<h4 class="font-weight-bold text-color-quaternary mb-3">' . $professor['nome'] . '</h4>';
							echo '<p class="text-color-dark p-0">' . $professor['funcao'] . '</p>';
							// Adicione um botão com um atributo data para armazenar os detalhes
							
							echo '</span>';
							echo '</span>';
							echo '</div>';
						}
						?>
					</div>

				</div>
			</section>

		</div>

		<footer id="footer" class="bg-color-quaternary">
			<?php include 'rodape.php' ?>
		</footer>

	</div>



	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>
	<script src="vendor/instafeed/instafeed.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Revolution Slider Scripts -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="js/views/view.contact.js"></script>

	<!-- Demo -->
	<script src="js/demos/demo-gym.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

</body>

</html>