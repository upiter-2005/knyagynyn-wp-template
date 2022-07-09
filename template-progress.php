<?php
/**
 * Template Name: Progress(Progress)
 */
get_header(); ?>

<section class="progress-box">
    <div class="roadmap">
		<div class="container-my">
			<h2>Готовність житлового району</h2>
			<p class="roadmap-desc">ІІ квартал 2022 р. - здача в експлуатацію 2-ї черги</p>
			<div class="roadmap-inner">
				<div class="roadmap-inner-fon-1 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-2 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-3 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-4 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-5 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-6 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-7 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-8 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-9 roadmap-inner-fon"></div>
				<div class="roadmap-inner-fon-10 roadmap-inner-fon"></div>

                
                
                

				<?php
        $args = array( 
        'posts_per_page' => -1,
        'post_type' => 'progress',

    );
    $query = new WP_Query( $args );
        if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    ?>
      
      <div class="roadmap-item wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".2s" style="top:<?php echo get_field( 'progress-pos' ); ?>%; left:<?php echo get_field( 'progress-persent' ); ?>%;">
					<div class="date"><?php echo get_field( 'progress-date' ); ?></div>
					<span><?php echo get_field( 'progress-name' ); ?></span>
				</div>
    <? endwhile; endif; wp_reset_query(); ?>
    
    <?php $options = get_option('sample_theme_options'); ?>
				<div class="roadmap-fill" style="width: <?php echo $options['procent']; ?>%;"></div>
            </div>
            
            <div class="roadmap-steps" >
            <?php $query = new WP_Query( $args );
                if( $query->have_posts() ) :
                while( $query->have_posts() ): $query->the_post();
            ?>
                    <div class="roadmap-steps-item" style="left:<?php echo get_field( 'progress-persent' ); ?>%;"><?php echo get_field( 'progress-persent' ); ?>%</div>
                <? endwhile; endif; wp_reset_query(); ?>
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
