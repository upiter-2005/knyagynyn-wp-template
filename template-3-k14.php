<?php
/**
 * Template Name: 3 Korpus 14 (Korpus 14 - 3)
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-3/1.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f2" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-3/2.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f3" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-3/3.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        <div id="f4" class="white-popup mfp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k14-3/4.png" alt="" class="img-responsive">
            <div class="more-block popup-more-block"><a href="/kontakti/" class="accent-but popup-a">Записатись на перегляд</a></div>
        </div>
        
      
        
        
      
        <div class="flat-plan">
            <svg viewBox="0 0 998.98474 1011.9797">
                <a href="#f1" class="open-popup-link">
                    <path class="part"
                        d="m 155.07965,283.58083 136.32173,0.50503 7.31551,730.33234 L 0,1011.9797 1.2192526,608.40706 117.04825,609.62631 V 337.73298 l 39.01609,-2.43851 z"
                        fill="#3E4752">
                </a>
                <a href="#f2" class="open-popup-link">
                    <path class="part"
                        d="m 316.40604,632.81208 h 400.89593 l 0.86215,327.61388 -144.83983,-0.86214 0.86215,20.6914 -113.80272,-1.72428 0.86214,-18.10498 h -17.24283 l -1e-5,50.00424 H 308.64676 l -2.58642,-51.72852 39.65852,-0.86214 -1.72428,-20.69141 -27.58854,1.72429 z"
                        fill="#3E4752">
                </a>
                <a href="#f3" class="open-popup-link">
                    <path class="part"
                        d="m 717.30197,632.81208 143.97768,2.58642 -1.72428,-166.39336 51.72851,-0.86214 -2.58643,-162.08266 H 606.08568 l 2.58643,325.8896 z"
                        fill="#3E4752">
                </a>
                <a href="#f4" class="open-popup-link">
                    <path class="part"
                        d="M 376.75597,2.5864254 998.98474,0 l 1.09976,306.92248 -393.99882,-0.86214 -0.86214,31.89924 -73.28205,-0.86214 0.86214,-182.77406 H 375.89382 Z"
                        fill="#3E4752">
                </a>
               
                
              
                
              
                
            </svg>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plans/14-3.png" alt="">
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
