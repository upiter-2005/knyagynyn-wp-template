<?php
/**
 * Template Name: 2-13 Korpus 27 (Korpus 27)
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k27-2-12/1.png" alt="" class="img-responsive">
        <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
    </div>
    <div id="f2" class="white-popup mfp-hide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k27-2-12/2.png" alt="" class="img-responsive">
        <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
    </div>
    <div id="f3" class="white-popup mfp-hide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k27-2-12/3.png" alt="" class="img-responsive">
        <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
    </div>
    <div id="f4" class="white-popup mfp-hide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k27-2-12/4.png" alt="" class="img-responsive">
        <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
    </div>
    
    
    
    <div class="flat-plan">
        <svg viewBox="0 0 294.39999 179.52">
            <a href="#f1" class="open-popup-link">
                <path class="part"
                    d="m 4.0379382,18.170722 37.8556708,-0.336495 0.340349,81.980677 2.260409,-0.118969 0.118969,17.488425 h 10.82617 6.067414 l 0.118968,20.10575 -20.700588,0.11897 0.118969,36.40448 H 3.6880358 Z"
                    fill="#3E4752">
            </a>
            <a href="#f2" class="open-popup-link">
                <path class="part"
                    d="M 41.893609,17.834227 69.953711,18.32121 V 5.8294759 l 35.571699,-0.1189689 0.83278,94.461303 -61.863823,-0.475875 -2.260409,0.118969 z"
                    fill="#3E4752">
            </a>
            <a href="#f3" class="open-popup-link">
                <path class="part"
                    d="m 105.52541,5.710507 36.52345,0.1189689 0.17846,11.8968891 27.66026,0.118969 0.35691,81.612663 -63.8863,0.713813 z"
                    fill="#3E4752">
            </a>
            <a href="#f4" class="open-popup-link">
                <path class="part"
                    d="m 170.24449,99.457997 0.10603,48.852113 76.80495,0.16824 6.56165,-6.89814 10.93608,11.10433 28.77031,-29.52742 -92.9567,-92.788459 -25.23712,0.252371 -0.0841,-12.702681 -5.25799,-0.07302 z"
                    fill="#3E4752">
            </a>
            
            
        </svg>
        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/27.png" alt="">
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
