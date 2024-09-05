<!DOCTYPE html>
<html lang="en" class="sticky-header-reveal">

<?php include 'header.php' ?>

<body>

	<div class="body">

		<?php include 'cabecalho.php'; ?>


		<div role="main" class="main">

			<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
				<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
					<ul>
						<li data-transition="fade">
							<img src="img/fundo.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
						</li>
						<li data-transition="fade">
							<img src="img/fundo.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
						</li>
					</ul>

					<div class="tp-static-layers">
						<h1 class="tp-caption font-weight-semibold text-color-light tp-static-layer" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-start="800" data-startslide="0" data-endslide="99" data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 60px;">Mexa-se agora</h1>

						<a href="contato.php" class="btn btn-primary tp-caption text-uppercase text-color-light custom-font-weight-medium tp-static-layer" data-x="center" data-hoffset="0" data-y="center" data-voffset="80" data-start="1500" data-startslide="0" data-endslide="99" data-fontsize="['15','15','15','24']" data-lineheight="['17','17','17','26']" style="padding: 15px 25px;" data-transform_in="y:[-300%];opacity:0;s:500;">Entrar</a>
					</div>
				</div>
			</div>
		</div>

		<section class="section section-center section-no-border section-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Sobre a academia:</span></h2>
						<p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150">A Powershape Academia se destaca como um refúgio para a busca de saúde e vitalidade. Equipada com instalações modernas e orientada por uma equipe dedicada de profissionais, a academia oferece uma experiência personalizada para atender às diversas metas de seus alunos, desde o desenvolvimento muscular até a perda de peso. Com uma variedade de equipamentos de última geração, os instrutores capacitados estão sempre presentes para orientar e motivar, proporcionando uma jornada de condicionamento físico adaptada às necessidades individuais.</p>
						<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="sobre-nos.php">Sobre a academia</a>
					</div>
				</div>
			</div>
		</section>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 position-relative p-0">
					<section class="packages section-background custom-squared-section custom-small-section-padding custom-overlay-style-1" style="background: url('img/precos.jpg'); background-size: cover;">
						<h2 class="text-color-light font-weight-bold">Nossos Pacotes</h2>
						<ul class="custom-list-style-1">
							<li>
								<span class="custom-list-item text-color-light">Peso solto</span>
								<span class="custom-list-value text-color-light">: $250 / mês</span>
							</li>
							<li>
								<span class="custom-list-item text-color-light">Treinamento pessoal</span>
								<span class="custom-list-value text-color-light">: $500 / mês</span>
							</li>
							<li>
								<span class="custom-list-item text-color-light">Treinamento em Grupo</span>
								<span class="custom-list-value text-color-light">: $300 / mês</span>
							</li>
							<li>
								<span class="custom-list-item text-color-light">Combate corporal</span>
								<span class="custom-list-value text-color-light">: $200 / mês</span>
							</li>
						</ul>
						<a class="btn btn-quaternary custom-btn-style-4 text-uppercase text-color-light custom-font-weight-medium text-2" href="preco.php">Confira os preços</a>
					</section>
				</div>
				<div class="col-lg-4 position-relative p-0">
					<section class="classes section-background custom-squared-section custom-small-section-padding" style="background: url('img/aulas.jpg'); background-size: cover;">
						<h2 class="text-color-light font-weight-bold">Nossas aulas</h2>

						<div>
							<ul class="custom-list-style-1">
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/running.png" alt />
										Correndo
									</span>
								</li>
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/body-building.png" alt />
										Musculação
									</span>
								</li>
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/kick-boxing.png" alt />
										Boxe
									</span>
								</li>
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/yoga.png" alt />
										Yoga
									</span>
								</li>
							</ul>
						</div>

						<a class="btn btn-quaternary custom-btn-style-4 text-uppercase text-color-light custom-font-weight-medium text-2" href="aulas.php">Ver aulas</a>
					</section>
				</div>
				<div class="col-lg-4 position-relative p-0">
					<h2 class="text-color-light font-weight-bold custom-title-position-1">Nossas instalações</h2>
					<div class="owl-carousel nav-bottom custom-dots-style-1 custom-dots-position-1 m-0" data-plugin-options="{'items': 1, 'animateOut': 'fadeOut', 'loop': false, 'dots': true, 'nav': false}">
						<div class="custom-overlay-style-1 custom-squared-section custom-small-section-padding" style="background: url('img/facility-3.jpg'); background-size: cover;">
							<ul class="custom-list-style-1 custom-space-1">
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/trainer.png" alt />
										Melhores treinadores
									</span>
								</li>
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/timing.png" alt />
										Tempo flexível
									</span>
								</li>
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/cardio.png" alt />
										Programas cardiovasculares
									</span>
								</li>
								<li>
									<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
										<img class="custom-icon" src="img/physiotherapist.png" alt />
										Fisioterapeuta
									</span>
								</li>
							</ul>
						</div>
					</div>
					<a class="btn btn-quaternary custom-btn-style-4 text-uppercase text-color-light custom-font-weight-medium text-2" href="sobre-nos.php">Saber mais</a>
				</div>
			</div>
		</div>

		<section class="section section-center section-no-border section-light">
			<?php include 'opcoes.php'; ?>
		</section>

		<div class="container-fluid">
			<?php include 'normas-academia.php'; ?>
		</div>

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
	<!-- 	<script>
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
				},
				popup: true
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
	</script> -->

</body>

</html>