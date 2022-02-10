<?php get_header();?>



<div class="content-container page-container">

    <h1><?php the_title();?></h1>

    <img src="<?php the_post_thumbnail_url( 'post_image' );?>" class="img-flue mb-5">

    <?php if(have_posts()) : while(have_posts()) : the_post();?>
    <?php the_excerpt(); ?>
    <a class="btn btn-primary" href="<?php the_permalink()?>">Read more</a>
    <?php endwhile; else: endif;?>

    <?php get_sidebar( )?>
</div>




</div>
<?php get_footer();?>