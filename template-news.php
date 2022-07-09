<?php
/**
 * Template Name: News (News)
 */
get_header(); ?>


<section class="news-baner duga news-baner-cloud">
		<div class="container-my">
            <div class="row align-items-end">

            <?php
        $args = array( 
        'posts_per_page' => 1,
		'post_type' => 'post',
		'meta_key'		=> 'acc-post',
		'meta_value'	=> 1
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
	?>


                <div class="col-md-4">
                    <h2>Новини</h2>
                    <div class="new-cart">
                        <div class="date"><img src="<?php echo get_template_directory_uri(); ?>/img/date.svg" alt=""> <?php echo get_the_date(); ?></div>                        
                        <h3><?php the_title();?></h3>
                        <p class="excerption"><?php echo the_field('text-prev');?></p>
                        <div class="more-block"><a href="<?php the_permalink();?>" class="more">детальніше</a></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="news-baner-img">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-responsive">
                    </div>
                    
                </div>
            </div>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
		
	</section>	



<section class="news">
	<div class="container-my">
		
		<div class="row">

        <?php
        $args = array( 
        'posts_per_page' => -1,
        'post_type' => 'post',
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    ?>

            <div class="col-md-4 col-sm-6">
					<div class="new-cart">
						<div class="date"><img src="<?php echo get_template_directory_uri(); ?>/img/date.svg" alt=""><?php the_date(); ?></div>
						<div class="new-cart-img"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-responsive"></div>

						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<div class="more-block"><a href="<?php the_permalink();?>" class="more">детальніше</a></div>
					</div>
				</div>

    <? endwhile; endif; wp_reset_query(); ?>


           
		</div>
	</div>
</section>



<?php get_footer(); ?>
