<?php get_header(); ?>




<div class="container about-me">

<?php while(have_posts()){ the_post();?>

<div class="two-sections">

    <div class="section-1">
        <h2 class="headline"><?php echo get_the_title(); ?></h2>

        <p class="content"><?php the_content(); ?></p>
    </div>

    <div class="section-2">
        
    </div>

</div>

<?php } ?>
</div>



<?php get_footer(); ?>