<?php
$current_page_override = 'search';
get_header();
?>
    <header>
        <h1>Search Results For: <?php echo esc_attr(get_search_query()); ?></h1>
    </header>
    <article id="search-results">
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
    </article>
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
