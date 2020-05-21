<?php wp_head(); ?>

    <div class="welcome-page">

        <div class="welcome-title">
            <h2>Avramescu Albert</h2>
            <p>Web Developer/Wordpress</p>
        </div>

        <div class="contact">
            <ul>
                <a href="https://github.com/Avramescu-Albert"><i class="fab fa-github">/Avramescu-Albert</i></a>
                <i class="fas fa-envelope"> avramescu.albert@gmail.com</i>
                <i class="fas fa-phone"> 0761 221 667</i>
            </ul>
        </div>

        <div class="welcome menu">
            <ul>
            <a href="<?php echo site_url('/portfolio'); ?>"><li <?php if(is_page('portfolio')) echo 'class="current-menu-item"' ?>>portfolio</li></a>
            <a href="<?php echo site_url('/about-me'); ?>"><li <?php if(is_page('about-me')) echo 'class="current-menu-item"' ?>>about me</li></a>
            <a href="<?php echo site_url('/my-skills'); ?>"><li <?php if(is_page('my-skills')) echo 'class="current-menu-item"' ?>>my skills</li></a>
            </ul>
        </div>  

    </div>

</div>

<?php get_footer(); ?>