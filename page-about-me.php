<?php get_header(); ?>




<div class="container about-me">

<?php while(have_posts()){ the_post();?>

<div class="main-text">

        <h2 class="headline"><?php echo get_the_title(); ?></h2>

        <p class="content">Mă numesc Avramescu Albert, am 21 de ani și în prezent sunt student la 
            Universitatea De Vest Din Timișoara și mă ocup cu web development, în special wordpress.  Pe parcusul a 4 ani de 
            programare ca hobby am obținut cunoștințe în următoarele limbaje de programare: <strong>PHP, JQUERY, JAVASCRIPT, SASS, CSS, HTML</strong>.</p>
        <p class="content">Pe lângă acestea am cunoștințe medii spre avansat în <strong>Adobe Premier</strong> și <strong>Photoshop</strong>.</p>
        <p class="content">Pentru a ă face o idee mai bună despre aptitudinile mele, vă rog să vă uitați în <a style="color: #393E46;" href="<?php echo site_url('/portfolio'); ?>">portofoliu</a></p>

</div>

<?php } ?>
</div>



<?php get_footer(); ?>