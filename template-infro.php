<?php
/**
 * Template Name: Template Infro(Infro)
 */
get_header(); ?>

<section class="infro">
        <div class="infro-data">
            <div class="container-my">
                <h2>Інфраструктура</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="in in1">Центральна частина міста</div>                        
                    </div>
                    <div class="col-md-4"><div class="in in2">В 5 хвилинах від будинку - річка Бистриця Солотвинська</div></div>
                </div>
                <div class="row">
                    <div class="col-md-4"><div class="in in3">Дитячий садочок та ігрові майданчики</div></div>
                    <div class="col-md-4"><div class="in in4">Школа та університет в пішій доступності</div></div>
                    <div class="col-md-4"><div class="in in5">Торгівельно-розважальний центр </div></div>
                </div>
            </div>
        </div>

    </section>


	<section class="map">
		<div class="container-my">
			<div id="map"></div>
		</div>
	</section>



    <section class="gallery duga">
        <div class="container-my">
            <h2>Галерея</h2>
            <!-- <div class="fotorama gal-wrap" data-nav="thumbs" data-arrows="true" data-thumbwidth="106" data-thumbheight="66">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gal/1.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gal/2.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gal/3.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gal/4.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gal/5.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gal/6.jpg">
              </div> -->


              <div class="slider">
    <?php
        $args = array( 
        'posts_per_page' => -1,
        'post_type' => 'photosgal',

    );
    $query = new WP_Query( $args );
        if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    ?>
                <figure>
					<img src="<?php the_field('foto_item');?>" alt="One">
					</figcaption>
				</figure>
    <? endwhile; endif; wp_reset_query(); ?>
			</div>
			
			<!-- THUMBNAILS -->
			<div class="slider-nav-thumbnails">
            <?php while( $query->have_posts() ): $query->the_post();?>
                <div>
					<img src="<?php the_field('foto_item');?>" alt="One">
					</figcaption>
				</div>
    <? endwhile; wp_reset_query(); ?>
				<!-- <div><img src="<?php echo get_template_directory_uri(); ?>/img/gal/1.jpg" alt="One">
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/gal/2.jpg" alt="Two">
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/gal/3.jpg" alt="Three">
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/gal/4.jpg" alt="Four">
				</div>
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/gal/5.jpg" alt="Five">
				</div> -->
			</div>


        </div>
    </section>



    <section class="form-section">
        <div class="container-about">
            <div class="row align-items-center">
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page-logo.png" alt="" class="img-responsive">
                </div>
            </div>

        </div>
    </section>



<?php get_footer(); ?>
