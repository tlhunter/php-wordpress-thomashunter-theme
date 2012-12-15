<!doctype html>
<!-- Like this Template? https://github.com/tlhunter/thomashunter.name -->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/reset.css" />
    <!--<link rel="stylesheet" type="text/css" href="library/css/style.css" />-->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.8.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <!-- end of wordpress head -->
</head>
<body <?php body_class(); ?>>
    <nav>
        <ul>
<?php
$slug = $wp_query->queried_object->post_name;
?>
            <li class="<?php if ($slug == '') { echo " active"; } ?>" id="dock-home"><a href="<?php echo home_url(); ?>" title="Homepage"><img alt="<?php bloginfo('name'); ?>" src="http://www.gravatar.com/avatar/e79802a826a113cdb9c49f5d04dc6946.png?s=200" /></a></li>
            <li class="with-label<?php if ($slug == 'posts') { echo " active"; } ?>" id="dock-posts"><a title="Blogs Posts" href="<?=site_url();?>/category-index/"><div class="icon"></div><span>Posts</span></a></li>
            <li class="with-label<?php if ($slug == 'projects') { echo " active"; } ?>" id="dock-projects"><a title="Projects by Thomas Hunter" href="<?=site_url();?>/projects"><div class="icon"></div><span>Projects</span></a></li>
            <li class="with-label<?php if ($slug == 'about') { echo " active"; } ?>" id="dock-about"><a href="<?=site_url();?>/about" title="About Thomas Hunter"><div class="icon"></div><span>About</span></a></li>
            <li class="with-label" id="dock-contact"><a title="E-Mail Thomas Hunter" href="#"><div class="icon"></div><span>Contact</span></a></li>
            <li class="with-label<?php if ($slug == 'search') { echo " active"; } ?>" id="dock-search"><a title="Search over 300 posts" href="#"><div class="icon"></div><span>Search</span></a></li>
            <li class="with-label" id="dock-github" class="external"><a target="_blank" title="Thomas Hunter Github" href="http://github.com/tlhunter"><div class="icon"></div><span>Github</span></a></li>
            <li class="with-label" id="dock-twitter" class="external"><a target="_blank" title="Thomas Hunter Twitter" href="http://twitter.com/tlhunter"><div class="icon"></div><span>Twitter</span></a></li>
        </ul>
        <div id="topper"><a href="#top" title="Return to Top">&#8679;&nbsp;&#8679;&nbsp;&#8679;</a></div>
    </nav>
    <article>
        <div id="popup-search" class="popup">
            <form action="<?=site_url();?>/search" method="post">
                <input id="search" type="search" placeholder="Search Terms" />
                <input type="submit" value="Search" />
            </form>
        </div>
        <div id="popup-contact" class="popup">
            <form action="/search" method="post">
                <div class="fieldset"><input id="contact-name" name="name" type="text" placeholder="Name" /></div>
                <div class="fieldset"><input id="contact-email" name="email" type="email" placeholder="Email Address" /></div>
                <div class="fieldset"><textarea id="contact-message" name="message" placeholder="Message"></textarea></div>
                <div class="fieldset submitter"><input type="submit" value="Send Mail" /></div>
            </form>
        </div>
