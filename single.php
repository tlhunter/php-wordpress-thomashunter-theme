<?php
$current_page_override = 'post';
get_header();

if (have_posts()) {
        the_post();
?>
        <header>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(get_option('date_format')) ?></time>
        </header>
<?php
if ( has_post_thumbnail() ) {
?>
        <section id="featured-image">
<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>
<img src="<?php echo $thumbnail['0']; ?>" />
        </section>
<?php
}
?>
        <article>
        <?php the_content(); ?>
        </article>
        <footer>
<?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>
<br />Category: <?php print_r(get_the_category_list(', ')) ?>
        </footer>
        <?php comments_template(); ?>
<?php
}
get_footer();
?>
