<?php
/**
 * Template Name: Tsokol 1 (Tsokol 1)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f5" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1/5.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f6" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1/6.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
        

        <div class="flat-plan">
            <svg viewBox="0 0 970.66669 573.33331">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="M 77.977612,67.378713 H 169.58238 V 358.09136 L 9.8418345,358.84843 12.113027,201.37907 h 66.621649 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="M 302.82568,68.135777 302.06861,359.60549 169.58238,358.09136 V 67.378713 Z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 445.91081,69.649905 0.44348,141.746825 15.01139,-0.26767 -0.31359,147.71937 -158.98348,0.75706 0.75707,-291.469713 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 593.53832,69.649905 0.75707,288.441455 -133.2433,0.75707 0.31359,-147.71937 -15.01139,0.26767 -0.44348,-141.746825 z"
                        fill="#3E4752">
                </a>
                <a href="#f5" class="open-popup-link">
                    <path class="part"
                        d="m 735.86639,70.40697 0.75707,461.05209 h -92.36183 l -0.62324,-82.05356 35.82672,0.29063 v -37.47468 l -16.32281,-0.29063 0.33656,-41.3479 -69.14148,-0.75706 -0.042,-11.7345 -0.75707,-288.441455 z"
                        fill="#3E4752">
                </a>
                <a href="#f6" class="open-popup-link">
                    <path class="part"
                        d="m 864.5673,67.378713 98.41835,-1e-6 0,292.605318 -98.03981,-0.75707 z"
                        fill="#3E4752">
                </a>
               
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1.png" alt="">
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
