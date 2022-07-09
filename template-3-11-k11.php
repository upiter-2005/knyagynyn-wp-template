<?php
/**
 * Template Name: 3-11 Korpus 17 (Korpus 17 - 3-11)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k17-3-11/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k17-3-11/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide"
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k17-3-11/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k17-3-11/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f5" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k17-3-11/5.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
        
        <div class="flat-plan">
            <svg viewBox="0 0 1548.0203 1011.9797">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="M 0,67.733122 1.20952,948.2637 378.57977,944.63514 376.16073,403.97969 H 245.53257 L 241.90401,66.523602 Z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="M 241.90401,66.523602 H 547.91257 V -1.20952 L 732.96914,0 734.17866,407.60825 376.16073,403.97969 H 245.53257 Z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 1053.4919,0 205.6185,1.20952 v 67.733122 h 229.8088 l 3.6285,761.997618 -361.6465,-4.83808 -3.6285,-418.49393 120.952,-2.41904 1.2095,-27.81896 -70.1522,1.20952 -2.419,-126.9996 -122.1615,4.83808 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 1130.9012,826.10218 -191.82592,3.49984 v 70.1313 h -178.7493 l -0.85526,-409.66945 370.32748,-0.85526 z"
                        fill="#3E4752">
                </a>
                <a href="#f5" class="open-popup-link">
                    <path class="part"
                        d="m 759.47072,490.06387 -382.30114,1.71052 1.41019,452.86075 182.47067,0.42696 0.85526,68.4208 186.44664,-2.5658 v -66.71026 l 13.68415,-0.85526 -1.71051,-43.61826 z"
                        fill="#3E4752">
                </a>
               
               
               
               
                
              
                
              
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/17.png" alt="">
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
