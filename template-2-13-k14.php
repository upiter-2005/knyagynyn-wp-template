<?php
/**
 * Template Name: 2-13 Korpus 14 (Korpus 14)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-2-12/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-2-12/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-2-12/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-2-12/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
      
        
        
      
        <div class="flat-plan">
            <svg viewBox="0 0 987.6142 1011.9797">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 1.8897846,282.5228 -0.94489228,683.15715 157.79701768,1.88979 1.88978,45.35486 137.00939,-1.8898 -1.88978,-730.40178 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="M 372.28757,0.94489232 987.6142,0 l 0.74317,304.25533 -388.35075,0.94489 v 41.57526 l -71.81181,-0.94489 -0.9449,-191.81314 H 374.17736 Z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 600.00662,305.20022 v 41.57526 l -0.94489,255.12093 H 851.34798 L 848.5133,467.7217 h 53.85887 l -1.88979,-163.46637 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 297.64108,1011.0348 -1.88978,-411.97307 303.31043,2.83468 h 134.17471 l 0.94489,344.8857 H 565.9905 l 0.94489,20.78763 -125.67068,-0.9449 v 44.40996 z"
                        fill="#3E4752">
                </a>
                
              
                
              
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/14.png" alt="">
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
