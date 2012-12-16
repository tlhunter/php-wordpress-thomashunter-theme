<?php
$current_page_override = 'search';
get_header();
?>
    <header>
        <h1>Search Results For: <?php echo esc_attr(get_search_query()); ?></h1>
    </header>
    <div id="search-results">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section>
            <header>
                <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(get_option('date_format')) ?></time>
            </header>
            <?php the_excerpt(); ?>
        </section>
<?php
    }
}
?>
    </div>
<?php
get_footer();
?>
