<?php
/**
 * Template Name: 2-13 Korpus 4 (Korpus 4)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k4-2-12/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k4-2-12/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k4-2-12/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k4-2-12/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
        
        


        <div class="flat-plan">
            <svg viewBox="0 0 621.33331 693.33331">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 25.247432,8.4158105 323.685018,0.323685 0.64737,112.3187045 -180.61624,0.64737 0.64737,117.82134 H 24.600062 Z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 24.261267,350.18621 103.453703,-0.91552 v 61.3398 l 185.3927,-0.45776 0.91552,223.38676 h -27.92335 l 0.22888,14.64831 -57.90661,0 -0.45776,-14.19055 h -28.83886 v -36.62078 l -174.406464,1.83104 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 313.10767,410.15273 190.54622,0.92725 -0.64737,-178.02677 6.43443,0.0393 -0.22888,-41.24207 93.11022,0.15034 -0.26815,441.12715 -30.0079,0.22888 0.22888,13.40516 -57.42633,-0.0393 0,-14.01326 -20.25808,-0.11781 v 42.61535 l -180.16522,0.18961 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 509.21207,191.85044 -194.50224,-0.73575 0.22888,171.20215 58.36436,0.22888 0.45776,47.37813 129.89306,1.15613 -0.64737,-178.02677 6.43443,0.0393 z"
                        fill="#3E4752">
                </a>
                
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k4-2-12.png" alt="">
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
