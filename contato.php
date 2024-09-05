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
						<div class="col-lg-9 mb-4 mb-lg-0">
							<h1 class="font-weight-bold text-color-primary mb-0">Entre em contato conosco</h1>
						<br>
							<h4 class="font-weight-bold text-color-quaternary">Nossas unidades</h4>

							<div class="row">
								<div class="col-md-4 position-relative">
									<div class="custom-location">
										<img src="img/demos/gym/map/pin.png" alt class="img-fluid" />
										<h6 class="font-weight-bold text-color-quaternary text-5 mb-1">Porto Alegre</h6>
										<p>
											Porto Blvd, Suite 100<br>
											Los Angeles/CA<br>
											<strong>Phone:</strong> <a href="tel:+123456789" class="text-color-dark">123-456-7890</a>
										</p>
									</div>
								</div>
								<div class="col-md-4 position-relative">
									<div class="custom-location">
										<img src="img/demos/gym/map/pin.png" alt class="img-fluid" />
										<h6 class="font-weight-bold text-color-quaternary text-5 mb-1">New York</h6>
										<p>
											Porto Blvd, Suite 100<br>
											New York/NY<br>
											<strong>Phone:</strong> <a href="tel:+123456789" class="text-color-dark">123-456-7890</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="custom-join-now-form custom-position-style-2 bg-color-primary p-4">
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
											<input type="text" value="" data-msg-required="Por favor, insira seu nome." maxlength="100" class="form-control" name="name" id="vipRequestName" placeholder="Your Name" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Por favor, indique o seu endereço de e-mail." maxlength="100" class="form-control" name="email" id="vipRequestEmail" placeholder="Your E-mail" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col">
											<input type="text" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="phone" id="vipRequestPhone" placeholder="Your Phone" required>
										</div>
									</div>
									<div class="row">
										<div class="form-group col mb-0">
											<input type="submit" value="Join Now!" class="btn btn-quaternary custom-btn-style-2 font-weight-bold" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-quaternary section-text-light m-0">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<h2 class="font-weight-bold text-color-light">Envie-nos uma mensagem</h2>
							<form id="contactFormMessage" class="contact-form custom-form-style-1" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4" id="contactFormMessageSuccess">
									<strong>Sucesso!</strong> Sua mensagem foi enviada.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactFormMessageError">
									<strong>Erro!</strong> Sua mensagem não foi enviada.
									<span class="mail-error-message text-1 mt-2 d-block" id="contactFormMessageErrorMessage"></span>
								</div>

								<input type="hidden" name="subject" value="Contact Form Received" />
								<div class="row">
									<div class="form-group col-lg-4 col-sm-4 custom-xs-margin-3">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="nome" id="contactName" placeholder="Nome" required>
									</div>
									<div class="form-group col-lg-4 col-sm-4 custom-xs-margin-3">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="contactEmail" placeholder="E-mail" required>
									</div>
									<div class="form-group col-lg-4 col-sm-4">
										<input type="tel" value="" data-msg-required="Please enter your phone number" maxlength="100" class="form-control" name="telefone" id="contactPhone" placeholder="Telefone" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="mensagem" id="contactMessage" placeholder="Sua mensagem" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="submit" value="Enviar mensagem" class="btn btn-primary font-weight-bold custom-btn-style-3 float-end btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-5">
							<h2 class="font-weight-bold text-color-light mt-2">Por que nós?</h2>
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<ul class="list list-icons list-light text-color-light">
										<li><i class="fas fa-check"></i> Consulta de Fitness</li>
										<li><i class="fas fa-check"></i> Profissionais</li>
										<li><i class="fas fa-check"></i> Zumba</li>
									</ul>
								</div>
								<div class="col-lg-6 col-sm-6">
									<ul class="list list-icons list-light text-color-light">
										<li><i class="fas fa-check"></i> Condicionamento</li>
										<li><i class="fas fa-check"></i> Esportes</li>
										<li><i class="fas fa-check"></i> Consultoria</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include 'normas-academia.php'; ?>

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

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
	<script>
		/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

		function initializeGoogleMaps() {
			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<div class='map-info-box'><strong>Address:</strong><br>Porto Gym 123<br>Porto Blvd, Suite 100<br>New York, NY<br><strong>Phone: </strong><a href='tel:+1234567890'>123-456-7890</a><div class='map-info-box-image' style='background: url(img/demos/gym/map/map-location-image.jpg); background-size: cover;'></div></div>",
				icon: {
					image: "img/demos/gym/map/pin.png",
					iconsize: [57, 66],
					iconanchor: [57, 66]
				}
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 14
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{
				"featureType": "all",
				"elementType": "labels.text.fill",
				"stylers": [{
					"saturation": 36
				}, {
					"color": "#000000"
				}, {
					"lightness": 40
				}]
			}, {
				"featureType": "all",
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
				}, {
					"color": "#000000"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "all",
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 17
				}, {
					"weight": 1.2
				}]
			}, {
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 21
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 29
				}, {
					"weight": 0.2
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 18
				}]
			}, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 19
				}]
			}, {
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#000000"
				}, {
					"lightness": 17
				}]
			}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');
		}

		// Initialize Google Maps when element enter on browser view
		theme.fn.intObs('.google-map', 'initializeGoogleMaps()', {});

		// Map text-center At
		var mapCenterAt = function(options, e) {
			e.preventDefault();
			$('#googlemaps').gMap("centerAt", options);
		}
	</script>

</body>

</html>