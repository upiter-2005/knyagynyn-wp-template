<?php
/**
 * Template Name: First Floor (First Floor)
 */
get_header(); ?>


<section class="flat clouds-2 auto-height">
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
                    <a href="/poverh-1j-korpus-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-1.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">1</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/poverh-1j-korpus-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-3.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">3</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/poverh-1j-korpus-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-4.png" alt="">
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
                    <a href="/poverh-1j-korpus-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-5.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">5</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/poverh-1j-korpus-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/fl1-6.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="kpi-data-num">6</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/tsokolnij-1j-korpus">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts1.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="cokol">цокольний</div>
                        <div class="kpi-data-num">1</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/tsokolnij-2j-korpus">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts3.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="cokol">цокольний</div>
                        <div class="kpi-data-num">3</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                <div class="kpi">
                    <a href="/tsokolnij-4j-korpus">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/plans/ts4.png" alt="">
                    </a>
                    <div class="kpi-data">
                        <div class="cokol">цокольний</div>
                        <div class="kpi-data-num">4</div>
                        <div class="kpi-data-text">
                            <span>корпус</span>
                            <span>ІІІ 2021</span>
                        </div> 
                    </div>
                </div>
                
            </div>
        </div>

    </section>



    <section class="form-section">
        <div class="container-about">
            <div class="row align-items-center">
                <div class="col-lg-6">
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
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/page-logo.png" alt="" class="img-responsive">
                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
