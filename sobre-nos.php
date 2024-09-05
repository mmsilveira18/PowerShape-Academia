<!DOCTYPE html>
<html lang="en" class="sticky-header-reveal">

<?php include 'header.php' ?>

<body>



	<div class="body">
		<?php include 'cabecalho.php'; ?>
		<div role="main" class="main">

			<section class="section section-no-border section-light custom-padding-top-1">
				<div class="container">
					<div class="row mt-4">
						<div class="col-md-7 col-lg-9">
							<br>
							<h1 class="font-weight-bold text-color-primary mb-0">Sobre a academia</h1>
							<br>
							<p>A Powershape Academia se destaca como um refúgio para a busca de saúde e vitalidade. Equipada com instalações modernas e orientada por uma equipe dedicada de profissionais, a academia oferece uma experiência personalizada para atender às diversas metas de seus alunos, desde o desenvolvimento muscular até a perda de peso. Com uma variedade de equipamentos de última geração, os instrutores capacitados estão sempre presentes para orientar e motivar, proporcionando uma jornada de condicionamento físico adaptada às necessidades individuais.</p>
							<p>Além do aspecto físico, a Powershape prioriza a construção de uma comunidade saudável e motivadora. As aulas coletivas não apenas diversificam os treinos, mas também promovem um senso de camaradagem entre os membros da academia. Essa atmosfera acolhedora não apenas incentiva a superação de limites, mas também cria um ambiente propício para a troca de experiências e o compartilhamento de sucessos, tornando a Powershape mais do que uma academia, mas uma comunidade comprometida com o bem-estar.</p>
							<p>Para além do treinamento físico, a Powershape Academia adota uma abordagem holística, integrando programas de nutrição e bem-estar. Ao enfatizar não apenas o exercício, mas também a alimentação equilibrada e práticas saudáveis, a academia se torna um catalisador para um estilo de vida vibrante e sustentável. Assim, na Powershape Academia, cada passo é guiado por profissionais comprometidos, criando não apenas resultados visíveis, mas uma transformação duradoura em direção a uma vida ativa e plena.</p>
						</div>
						<div class="col-md-5 col-lg-3">
							<div class="custom-join-now-form custom-position-style-1 bg-color-primary p-4">
								<h4 class="font-weight-bold text-color-light mb-0">Promoção!</h4>
								<p class="font-weight-light text-color-light text-2">Ganhe 1 mês de graça</p>

								<form id="vipRequest" class="contact-form" action="php/contact-form.php" method="POST">
									<div class="contact-form-success alert alert-success d-none mt-4" id="vipRequestSuccess">
										<strong>Success!</strong> Your VIP request has been sent to us.
									</div>

									<div class="contact-form-error alert alert-danger d-none mt-4" id="vipRequestError">
										<strong>Error!</strong> There was an error sending your VIP request.
										<span class="mail-error-message text-1 mt-2 d-block" id="vipRequestErrorMessage"></span>
									</div>

									<input type="hidden" name="subject" value="Vip Request Received" />
									<div class="row">
										<div class="form-group col">
											<input type="text" value="" data-msg-required="Por favor, insira seu nome." maxlength="100" class="form-control" name="name" id="vipRequestName" placeholder="Seu nome" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="vipRequestEmail" placeholder="Seu E-mail" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="phone" id="vipRequestPhone" placeholder="Seu telefone" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col mb-0">
											<input type="submit" value="Entrar!" class="btn btn-quaternary custom-btn-style-2 font-weight-bold" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="parallax section section-text-light section-parallax m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/sobre-nos1.jpg">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-6">
							<h2 class="font-weight-bold text-color-light">Por que nós?</h2>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-icons list-light text-color-light">
										<li><i class="fas fa-check"></i> Consultoria Fitness</li>
										<li><i class="fas fa-check"></i> Profissionais</li>
										<li><i class="fas fa-check"></i> Zumba</li>
										<li><i class="fas fa-check"></i> Nutrição</li>
										<li><i class="fas fa-check"></i> TRX</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-icons list-light text-color-light">
										<li><i class="fas fa-check"></i> Condicionamento</li>
										<li><i class="fas fa-check"></i> Esportes</li>
										<li><i class="fas fa-check"></i> Consulta</li>
										<li><i class="fas fa-check"></i> Spin</li>
										<li><i class="fas fa-check"></i> Cardio Completo</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
				<div class="owl-carousel custom-arrows-style-1" data-plugin-options="{'items': 5, 'loop': false, 'dots': false, 'nav': true}">
					<div>
						<a href="img/sobre-nos2.jpg" class="lightbox text-decoration-none">
							<span class="thumb-info custom-thumb-info-1">
								<span class="thumb-info-wrapper">
									<span class="thumb-info-plus"></span>
									<img src="img/sobre-nos2.jpg" class="img-fluid" alt="">
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="img/sobre-nos3.jpg" class="lightbox text-decoration-none">
							<span class="thumb-info custom-thumb-info-1">
								<span class="thumb-info-wrapper">
									<span class="thumb-info-plus"></span>
									<img src="img/sobre-nos3.jpg" class="img-fluid" alt="">
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="img/sobre-nos4" class="lightbox text-decoration-none">
							<span class="thumb-info custom-thumb-info-1">
								<span class="thumb-info-wrapper">
									<span class="thumb-info-plus"></span>
									<img src="img/sobre-nos4.jpg" class="img-fluid" alt="">
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="img/sobre-nos5.jpg" class="lightbox text-decoration-none">
							<span class="thumb-info custom-thumb-info-1">
								<span class="thumb-info-wrapper">
									<span class="thumb-info-plus"></span>
									<img src="img/sobre-nos5.jpg" class="img-fluid" alt="">
								</span>
							</span>
						</a>
					</div>
					<div>
						<a href="img/sobre-nos6.jpg" class="lightbox text-decoration-none">
							<span class="thumb-info custom-thumb-info-1">
								<span class="thumb-info-wrapper">
									<span class="thumb-info-plus"></span>
									<img src="img/sobre-nos6.jpg" class="img-fluid" alt="">
								</span>
							</span>
						</a>
					</div>
				</div>

				<section class="section section-center section-no-border section-light">
			    <?php include 'opcoes.php' ?>
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