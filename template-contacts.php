<?php
/**
 * Template Name: Template Contacts(Contacts)
 */
get_header(); ?>
 <section class="form-section contact">
        <div class="container-about">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Контакти</h2>
                    <div class="contact-box">
                        <h4>Відділ продажу:</h4>
                        <p class="f-grafik box-1">
                        <span>м. Івано-Франківськ, вул. Княгинин, 44</span>
                    </div>
                    <div class="contact-box">
                        <h4>Графік роботи:</h4>
                        <p class="f-grafik box-2">
                        <span>пн-пт: 8:00-17:00</span>
                        <span>сб: 8:00-12:00</span>
                        <span>нд: вихідний</span>
                    </div>
                    <div class="contact-box ">
                        <h4>Контакти:</h4>
                        <p class="f-grafik box-3">
                        <span><a href="tel:+380972000777">+38 097 2000 777</a></span>
                        <span><a href="tel:+380962000777">+38 096 2000 777</a></span>
                    </div>
                    <div class="soc contact-soc">
                        <a href="viber://chat?number=380962000777"><img src="<?php echo get_template_directory_uri(); ?>/img/viber-b.svg" alt=""></a>
						<a href="tg://resolve?domain=knyagynyn"><img src="<?php echo get_template_directory_uri(); ?>/img/telega-b.svg" alt=""></a>
						<a href="https://wa.me/380962000777"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsup--b.svg" alt=""></a>
                      
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page-logo.png" alt="" class="img-responsive img-with-padd">
                    <form action="#">
                        <div class="container">
                            <h3>Зв’яжіться з нами!</h3>
                            <div class="row ">
                                <div class="col-md-5">
                                    <input type="text" name="name" placeholder="Ваше ім’я" required>
                                    <input type="tel" name="tel" placeholder="Номер телефону" required>
                                    <input type="mail" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-7">
                                    <textarea name="mes" placeholder="Текст повідомлення"></textarea>
                                    <div class="more-block"><button type="submit">ВІДПРАВИТИ</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>

        </div>
    </section>

	<section class="map map-contact">
		<div class="container-about">
			<div id="map"></div>
		</div>
	</section>

<?php get_footer(); ?>
