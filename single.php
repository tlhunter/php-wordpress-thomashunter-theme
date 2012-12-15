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
        <footer>
<?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>
<?php print_r(get_the_category_list(', ')) ?>
            <h6>Comments (27)</h6>
            <?php comments_template(); ?>
        </footer>
<?php
    }
}
get_footer();
?>
