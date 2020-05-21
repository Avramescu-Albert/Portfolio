<?php get_header(); ?>

<div class="container about-me">
        <div class="main-text">

            <div class="big-text">
                <h2 class="main-text-box">portfolio</h2>
            </div>

            <div class="small-text">
                <p>This is my portfolio, here you can view my work see my skills level</p>
            </div>

        </div>


<div class="container">
        <div class="project">
            <img class="feature-image" src="<?php print_r(get_theme_file_uri("./images/fictional-university.jpg")); ?>" >

            <div class="project-detail">
                    <h2 class="headline">Site Universitate</h2>
                    <p class="content">Pentru acest proiect am folosit următoarele limbaje de programare: <strong>PHP, SASS, JQUERY, HTML</strong></p>
                    
                <div class="link-site">
                    <a href="#">vezi site</a>
                </div>
            </div>

        </div>
</div>
 

</div>

<?php get_footer(); ?>