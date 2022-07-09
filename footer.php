    	<footer>
		<div class="footer-fon">
			<div class="container-my">
				<div class="row">
					<div class="col-md-5 col-8">
						<div class="footer-left">
							<div class="footer-left-1 mob-full">
								<div class="mob-footer-top d-block d-md-none ">
									<h4>ГРАФІК РОБОТИ</h4>
									<p class="f-grafik with-ico with-ico-grafik">
										<span>пн-пт: 8:00-17:00</span>
										<span>сб: 8:00-12:00</span>
										<span>нд: вихідний</span>
									</p>
								</div>
								<h4 class="mt35">КОНТАКТИ</h4>
								<p class="f-adres with-ico with-ico-loc">м. Івано-Франківськ, вул. Княгинин, 44</p>
								<p class="f-tel with-ico with-ico-tel"><a href="tel:+380972000777">+38 097 2000 777</a></p>
								<p class="f-tel"><a href="tel:+380962000777">+38 096 2000 777</a></p>
								<div class="soc d-none d-xl-block">
									<a href="viber://chat?number=+380962000777"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a>
									<a href="tg://resolve?domain=knyagynyn"><img src="<?php echo get_template_directory_uri(); ?>/img/telega.svg" alt=""></a>
									<a href="https://wa.me/380962000777"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsup.svg" alt=""></a>
								</div>
							</div>
							<div class="footer-left-2 d-none d-md-block">
								<h4>ГРАФІК РОБОТИ</h4>
								<p class="f-grafik with-ico with-ico-grafik">
									<span>пн-пт: 8:00-17:00</span>
									<span>сб: 8:00-12:00</span>
									<span>нд: вихідний</span>
								</p>

							</div>
						</div>
					</div>
					<div class="col-md-2 col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="" class="img-responsive footer-logo">
						<div class="soc d-block d-xl-none soc-mob mt35">
                            <a href="viber://chat?number=380962000777"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a>
							<a href="tg://resolve?domain=knyagynyn"><img src="<?php echo get_template_directory_uri(); ?>/img/telega.svg" alt=""></a>
							<a href="https://wa.me/380962000777"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsup.svg" alt=""></a>
						</div>
					</div>
					<div class="col-md-4 offset-md-1">
						<div class="footer-left flex-row-mob">
							<div class="footer-left-1 mob-50">
								<h4>МЕНЮ</h4>
								<a href="/">Головна</a>
								<a href="/pro-nas">Про нас</a>
								<a href="/infrastruktura">Інфраструктура</a>
							</div>
							<div class="footer-left-2 mob-50">
								<a href="#">Квартири</a>
								<a href="/hid-budivnitstva-2">Хід будівництва</a>
								<a href="/novini">Новини</a>
								<a href="/kontakti">Контакти</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="copy"><span>Copyright © 2021</span> <span class="madeby">Розроблено <a href="https://vio.agency/">vio.agency</a> </span> </div>
					</div>
				</div>
			</div>
		</div>

	</footer>


    <div id="thanck" class="white-popup mfp-hide">
				<h2>Дякуємо за Вашу заявку!</h2>
				<h3>Ми зв’яжемось з Вами найближчим часом</h3>
    </div>


    
    <?php wp_footer(); ?>
    <script>
        $("form").submit(function() {
        var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "https://knyagynyn.if.ua/send.php",
                data: data
            }).done(function() {
                $(this).find("input").val("");
                $(this).trigger("reset");
                    $.magnificPopup.open({
                    items: {
                        src: '#thanck'
                    },
                    type: 'inline',
                    
                    });
            });
            return false;
        });
    
    </script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6fr_vldOe56ar2qs_1yElLX72iZ1ITww&callback=initMap&libraries=&v=weekly"
		defer></script> -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbOkTFaCYn6c7biRDdQjfYlazEPBp7V6A&callback=initMap" defer></script>
        
	<script>
    
		function initMap() {
			
			// The location of Uluru
			const uluru = { lat: 48.93547621646703, lng: 24.710054403928044 };
			// The map, centered at Uluru
			const map = new google.maps.Map(document.getElementById("map"), {
				zoom: 15,
				center: uluru,
				// panControl:false,
				// zoomControl:false,
				// mapTypeControl:false,
				// scaleControl:false,
				// streetViewControl:false,
				// overviewMapControl:false,
				// rotateControl:false,
				disableDefaultUI: true,
				styles: [
				{
					"featureType": "poi",
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				
                {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FFBB00"
            },
            {
                "saturation": 43.400000000000006
            },
            {
                "lightness": 37.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
  
    
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FFC200"
            },
            {
                "saturation": -61.8
            },
            {
                "lightness": 45.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 51.19999999999999
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 52
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#0078FF"
            },
            {
                "saturation": -13.200000000000003
            },
            {
                "lightness": 2.4000000000000057
            },
            {
                "gamma": 1
            }
        ]
    }

				]
			});
		
			// The marker, positioned at Uluru
			
			const marker2 = new google.maps.Marker({
				position: {lat: 48.926, lng: 24.7121},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/centr-rynok.svg'
			});
			const marker3 = new google.maps.Marker({
				position: {lat: 48.93082, lng: 24.69496},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/neft.svg',
			});
            // var info3 = new google.maps.InfoWindow({
            //     content: '<p class="map-info" style="float:left;">ІФНТУ Нафти і газу</p>',
            // });
            // info3.open(map, marker3);
			const marker4 = new google.maps.Marker({
				position: {lat: 48.92958, lng: 24.70205},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/med.svg'
			});
            // var info4 = new google.maps.InfoWindow({
            //     content: '<p class="map-info" style="float:left;">Міська поліклініка</p>',
            // });
            // info4.open(map, marker4);
			const marker5 = new google.maps.Marker({
				position: {lat: 48.92749, lng: 24.72359},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/med.svg'
			});
			const marker6 = new google.maps.Marker({
				position: {lat: 48.92879, lng: 24.71078},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/park.svg'
			});
			const marker7 = new google.maps.Marker({
				position: {lat: 48.9318, lng: 24.70754},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/dsad.svg'
			});
			const marker8 = new google.maps.Marker({
				position: {lat: 48.92928854057429, lng: 24.70260858971745},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/dsad.svg'
			});
			const marker9 = new google.maps.Marker({
				position: {lat: 48.93446204579476, lng: 24.705870155854328},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/dsad.svg'
			});
			const marker10 = new google.maps.Marker({
				position: {lat: 48.93735284680612, lng: 24.702132375316154},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/river.svg'
			});
			const marker11 = new google.maps.Marker({
				position: {lat: 48.9245028688369, lng: 24.72394656295884},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/vokz.svg'
			});
			const marker12 = new google.maps.Marker({
				position: {lat: 48.92313085981773 , lng: 24.711445759669786},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/ratusha.svg'
			});
			const marker13 = new google.maps.Marker({
				position: {lat: 48.925629069277115, lng: 24.708061472389534},
				map: map,
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/med.svg'
			});
			const marker = new google.maps.Marker({
				position: uluru,
				map: map,
				title: "KNIHININ",
				icon: '<?php echo get_template_directory_uri(); ?>/img/map/logo.svg'
			});
			
			
		}

		//map.hideControls();


        var popupImages = $('.article img');
        popupImages.each(function(){
            $(this).attr('data-mfp-src', $(this).attr('src'));
        });
        popupImages.magnificPopup({type: 'image'});


	</script>
	<script>
		new WOW().init();
	</script>

</body>

</html>