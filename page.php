<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <header>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(get_option('date_format')) ?></time>
        </header>
        <?php the_content(); ?>
<?php
    }
}
get_footer();
?>

