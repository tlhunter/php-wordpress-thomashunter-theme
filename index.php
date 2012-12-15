<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <header>
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(get_option('date_format')) ?></time>
        </header>
<?php
    }
}
get_footer();
?>
