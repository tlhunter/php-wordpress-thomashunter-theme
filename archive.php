<?php
get_header();
?>
<header>
<?php if (is_category()) { ?>
    <h1>Posts Categorized As <?php single_cat_title(); ?></h1>
<?php } elseif (is_tag()) { ?>
    <h1>Posts Tagged As <?php single_tag_title(); ?></h1>
<?php } elseif (is_author()) {
    global $post;
    $author_id = $post->post_author;
?>
    <h1>Posts By <?php echo get_the_author_meta('display_name', $author_id); ?></h1>
<?php } elseif (is_day()) { ?>
    <h1>Posts On <?php the_time('l, F j, Y'); ?></h1>
<?php } elseif (is_month()) { ?>
    <h1>Posts During <?php the_time('F Y'); ?></h1>
<?php } elseif (is_year()) { ?>
    <h1>Posts During <?php the_time('Y'); ?></h1>
<?php } ?>
</header>
<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <div id="post-listing">
            <section>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(get_option('date_format')) ?></time>
            </section>
        </div>
<?php
    }
}
?>
<?php
$max_pages = $wp_query->max_num_pages;
if ($max_pages > 1) {
?>
<footer id="pagination">Page: 
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
    'total' => $max_pages,
    'mid_size' => 5
) );
?>

</footer>

<?php
}
get_footer();
?>

