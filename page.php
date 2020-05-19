<?php get_header(); ?>




<div class="container about-me">

<?php
    $relatedSkills = get_field('my_skills');

    if($relatedSkills == true){
    echo '<h2 class="headline">'.get_the_title().'</h2>';
    echo '<ul class="skill-list">';
    foreach($relatedSkills as $skill){
        $skillLevel = get_field('skill_level', $skill->ID);
    ?>
            <li class="content">
                <?php echo get_the_title($skill); ?>
                <span class="bar"><span style="width:<?php echo $skillLevel;?>%;"></span></span>  
            </li>
    <?php
    }
    echo '</ul>';
    }
?>

</div>

<?php get_footer(); ?>