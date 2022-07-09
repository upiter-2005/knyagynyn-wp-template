<?php get_header(); ?>
<?php
global $post;
$current_post =  $post->ID;
?>
<?php while( have_posts() ) : the_post();?>
                      
    <section class="article">
		<div class="container-min">
            <h1><?php the_title();?></h1>
            
            <?php the_content();?>

		</div>
		
	</section>	

    <?php endwhile; ?>

<section class="news">
	<div class="container-my">
		<h2>Інші новини:</h2>
		<div class="row">
        <?php
        $args = array( 
        'posts_per_page' => 3,
        'post_type' => 'post',
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    ?>
        <?php if (get_the_ID() !== $current_post) { ?>

            <div class="col-md-4">
					<div class="new-cart">
						<div class="date"><img src="<?php echo get_template_directory_uri(); ?>/img/date.svg" alt=""><?php the_date(); ?></div>
						<div class="new-cart-img"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-responsive"></div>

						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<div class="more-block"><a href="<?php the_permalink();?>" class="more">детальніше</a></div>
					</div>
				</div>
       <?php } ?>
            

    <? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>    