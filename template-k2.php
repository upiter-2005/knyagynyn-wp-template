<?php
/**
 * Template Name: 2-13 Korpus 2 (Korpus 2)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k2-2-12/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k2-2-12/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k2-2-12/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k2-2-12/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        


        <div class="flat-plan">
            <svg viewBox="0 0 680 693.33331">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 259.37349,11.694779 -0.42202,113.458751 88.75936,0.14767 -0.6265,111.93574 h 62.6506 V 213.84738 H 671.19677 V 11.694779 Z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 610.63452,213.42971 1.25301,88.12851 -35.08433,-0.41767 -0.41767,121.1245 -167.06827,-1.25301 0.41767,-207.16466 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 499.53412,423.10039 v 214.26505 l -196.30521,0.41767 -0.41767,43.85542 h -91.05221 v -274.8273 l 197.14056,-0.41767 0.41767,14.61848 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="M 211.75903,681.63853 104,681.22086 104.41767,636.5301 10.859437,637.36544 V 190.45783 l 205.076303,0.83534 z"
                        fill="#3E4752">
                </a>
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k2-2-12.png" alt="">
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
