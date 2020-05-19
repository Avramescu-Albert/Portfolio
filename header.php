<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofoliu</title>
    <?php wp_head(); ?>
</head>
<body>

<div class="two-sections">
    <div class="section-1">
        <h2 class="header"><a href="<?php echo site_url(); ?>">Portfolio</a></h2>
        <button type="button" class="icon" aria-hidden="true">&#9776;</button>
    </div>

    <div class="section-2">

        <div class="menu-icon">
            <div class="section-1 disable">
                <h2 class="header"><a href="<?php echo site_url(); ?>">Portfolio</a></h2>
                <button type="button" class="icon" aria-hidden="true">&#9776;</button>
                <hr class="menu-line">
            </div>

            <ul class="menu-list">
                <li <?php if(is_page('portfolio')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/portfolio'); ?>">view my portfolio</a></li>
                <li <?php if(is_page('about-me')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-me'); ?>">about me</a></li>
                <li <?php if(is_page('my-skills')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/my-skills'); ?>">my skills</a></li>
            </ul>
        </div>  
    </div>
</div>