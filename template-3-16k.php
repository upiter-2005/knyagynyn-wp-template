<?php
/**
 * Template Name: 3 Korpus 16 ( 3 Korpus 16)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k16/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k16/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k16/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k16/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
        
      
        
        
      
        <div class="flat-plan">
            <svg viewBox="0 0 693.60406 1011.9797">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="M 1.2192526,341.39073 282.86661,17.069537 l 13.41178,9.754021 25.6043,-28.0428106 71.07377,63.6842876 -25.96142,30.198164 -7.05084,-8.173303 -130.61448,151.305884 44.83137,38.79638 -29.31282,34.0546 30.17496,26.7264 -120.69985,139.66697 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 392.95646,62.465035 72.60011,63.407665 -25.00211,28.88175 46.12458,41.81388 -9.91463,12.06998 2.58643,1.72429 0.86214,223.29472 -229.32972,-200.87903 121.562,-137.080551 -5.45022,-3.03454 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 275.02323,335.37316 158.20302,137.94269 -0.43107,36.64102 -68.54027,2.58643 -2.15536,148.71946 -98.71523,-0.43107 V 567.2893 L 154.32338,475.04013 Z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="m 580.22143,270.71252 94.40453,-0.43107 1.29321,318.13033 -74.57527,0.86214 -0.43107,-80.61026 25.86426,0.43107 0.21553,-52.15958 -9.69909,-0.43107 -0.86215,-121.99306 -35.77888,-0.21554 z"
                        fill="#3E4752">
                </a>
               
               
               
               
                
              
                
              
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/16.png" alt="">
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
