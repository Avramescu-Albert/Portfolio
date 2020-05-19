<?php wp_head(); ?>

    <div class="welcome-page">

        <div class="welcome-title">
            <h2>Avramescu Albert</h2>
            <p class="small-text">Web Developer/Wordpress</p>
        </div>

        <div class="contact">
            <ul>
                <i class="fab fa-github"></i>
                <i class="fas fa-envelope"> avramescu.albert@gmail.com</i>
                <i class="fas fa-phone"> 0761 221 667</i>
            </ul>
        </div>

        <div class="welcome menu">
            <ul>
                <li <?php if(is_page('portfolio')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/portfolio'); ?>">view my portfolio</a></li>
                <li <?php if(is_page('about-me')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-me'); ?>">about me</a></li>
                <li <?php if(is_page('my-skills')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/my-skills'); ?>">my skills</a></li>
            </ul>
        </div>  

    </div>

</div>

<?php get_footer(); ?>