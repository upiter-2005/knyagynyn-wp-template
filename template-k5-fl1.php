<?php
/**
 * Template Name: Floor1 Korpus 5 (Floor 1 Korpus 5)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f5" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5/5.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
        

        <div class="flat-plan">
            <svg viewBox="0 0 1414.6667 533.33331">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 14.342939,48.313059 203.065821,1.509783 -0.2211,-35.701005 103.95393,-0.358478 -0.53379,258.394011 -112.25773,0.35848 0.0458,41.64855 6.03914,0.40427 -0.80068,170.0717 -200.801154,0.75489 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 321.14159,13.763359 102.95371,0.115153 -0.26689,33.628703 87.80828,0.533789 -0.2669,435.304866 -148.39332,-0.53378 -0.53379,-92.34549 49.10858,0.2669 -0.40034,-75.13079 8.14028,-0.13345 -0.13344,-43.50381 -98.54996,0.19192 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 511.63669,48.041004 185.1282,0.272055 0.75489,435.572421 -186.14999,-0.53961 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 696.76489,48.313059 205.3305,-1.509783 V 13.588048 l 101.15541,0.188722 10e-5,258.73908 -113.23377,1.50978 v 211.36963 l -192.49735,-1.50978 z"
                        fill="#3E4752">
                </a>
                <a href="#f5" class="open-popup-link">
                    <path class="part"
                        d="m 1003.2508,13.77677 103.5605,0.635531 -0.2669,34.69628 94.4807,-1.067577 0.2669,434.504186 h -155.0657 l -0.5338,-92.34548 48.3746,-0.20017 -0.6005,-74.26339 8.5406,-0.26689 -0.2669,-42.70312 -98.4894,-0.25029 z"
                        fill="#3E4752">
                </a>
               
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5.png" alt="">
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
