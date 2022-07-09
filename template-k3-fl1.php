<?php
/**
 * Template Name: Floor1 Korpus 3 (Floor 1 Korpus 3)
 */
get_header(); ?>
   <div class="abs-choose-navigation">
    <div class="choose-navigation">
        <div class="nav-item">
            <span>1</span>
            <span>Виберіть поверх</span>
        </div>
        <div class="nav-item">
            <span>2</span>
            <span>Виберіть корпус</span>
        </div>
        <div class="nav-item">
            <span class="active">3</span>
            <span>Виберіть квартиру</span>
        </div>
    </div>
   </div>
   

   <section class="flat korpus-flat">
        

        <div id="f1" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-3/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-3/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-3/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-3/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        

        <div class="flat-plan">
            <svg viewBox="0 0 901.33331 586.66669">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 16.494846,43.436428 230.378014,1.099656 0.54983,178.694166 h -70.37801 l 0.54983,183.64262 115.46392,-0.54983 v 151.20275 l -276.013756,0.54983 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 436.28868,556.97596 -143.23025,0.54983 -0.27491,-250.44674 38.21306,-0.54983 v -83.02406 l -39.03781,-0.27491 -0.82474,-179.518908 166.59794,0.824742 -0.54982,344.467366 h -21.16839 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 457.73197,44.536084 227.69994,0.07725 10e-6,10.98324 h -2.33273 l -0.77757,168.733664 -74.64715,-0.38879 v 194.39363 l 117.80253,-0.38879 -0.77757,138.79705 -288.41075,0.23262 -0.27492,-167.97251 h 21.16839 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 724.69943,556.74334 0.77757,-138.79705 -0.38878,-110.41558 41.60023,0 -0.38879,-84.36683 -40.04508,0 V 45.488108 l 171.45517,-0.777575 0.38879,512.421597 z"
                        fill="#3E4752">
                </a>
               
                
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-3.png" alt="">
        </div>

    </section>

        
  
    <div class="arrows d-flex d-md-none">
        <div class="arr-left"><img src="<?php echo get_template_directory_uri(); ?>/img/Left.svg" alt=""></div>
        <div class="arr-right"><img src="<?php echo get_template_directory_uri(); ?>/img/Right.svg" alt=""></div>
    </div>


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
