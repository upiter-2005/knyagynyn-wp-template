<?php
/**
 * Template Name: 14 Floor (14 Floor)
 */
get_header(); ?>

<section class="flat auto-height">
        <div class="choose-navigation">
            <div class="nav-item">
                <span>1</span>
                <span>Виберіть поверх</span>
            </div>
            <div class="nav-item ">
                <span class="active">2</span>
                <span>Виберіть корпус</span>
            </div>
            <div class="nav-item no-active">
                <span>3</span>
                <span>Виберіть квартиру</span>
            </div>
        </div>

        
        <div class="korpus-plan">
            <div class="korpus-plan-item">
                <div class="kpi">
                    <a href="/poverh-2-13-korpus-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k2-2-12.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">2</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/poverh-2-13-korpus-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k4-2-12.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">4</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/poverh-2-13-korpus-7">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/k7-2-12.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">7</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                
                <div class="kpi">
                    <a href="/poverh-2-13-korpus-11">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/11.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">11</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІ 2022</span>
                        </div> 
                    </div>
                </div>

                <div class="kpi">
                    <a href="/poverh-2-13-korpus-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/20.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">20</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІ 2022</span>
                        </div> 
                    </div>
                </div>

                <div class="kpi">
                    <a href="/poverh-2-13-korpus-22">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/22.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">22</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІ 2022</span>
                        </div> 
                    </div>
                </div>

                <div class="kpi">
                    <a href="/poverh-2-13-korpus-27">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/27.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">27</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІ 2022</span>
                        </div> 
                    </div>
                </div>

                <div class="kpi">
                    <a href="/poverh-2-13-korpus-37">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/37.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">37</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІ 2022</span>
                        </div> 
                    </div>
                </div>
                
            </div>
        </div>

    </section>



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
