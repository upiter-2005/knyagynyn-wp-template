<?php
/**
 * Template Name: 2-13 Korpus 20 (Korpus 20)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k20-2-12/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k20-2-12/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k20-2-12/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k20-2-12/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f5" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k20-2-12/5.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
        
        
      
        <div class="flat-plan">
            <svg viewBox="0 0 198.39999 251.84">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 148.94687,240.66331 -11.191,0.0143 0.0834,3.60952 -120.137352,0.47205 -0.236026,-44.84499 73.33503,-0.34565 -0.140719,-22.24374 14.371427,0.1669 0.23602,17.70197 33.1128,0.0548 -0.0691,14.57882 10.62118,0.23602 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 17.465892,199.91419 -0.192181,-28.01156 -10.9316724,-0.16694 0.083448,-30.20813 84.1154594,-0.1669 0.119257,35.9641 0.140719,22.24374 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 6.4254866,141.52756 -0.083448,-32.37774 10.9316724,-0.0834 V 78.274109 h 73.601027 l -0.333792,63.086551 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="M 33.751752,77.770646 33.633739,50.627628 44.490946,50.391602 V 16.28581 l 58.298484,0.236027 0.23602,-11.6832991 31.62752,0.2360262 0,93.7024169 H 91.106128 l -0.23139,-20.502872 z"
                        fill="#3E4752">
                </a>
                <a href="#f5" class="open-popup-link">
                    <path class="part"
                        d="m 134.65297,5.0745641 30.74072,0.099204 0,10.8482239 h 31.87709 l 0.33379,138.857268 -46.14667,0.0834 -0.25034,-56.160424 -16.55459,-0.0253 z"
                        fill="#3E4752">
                </a>
                
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/20.png" alt="">
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
