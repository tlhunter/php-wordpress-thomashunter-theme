<?php
$current_page_override = 'home';
get_header();
?>
<header>
	<h1>Thomas Hunter</h1>
	<p>Programmer, Writer, Artist.</p>
</header>
<article id="post-listing">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section>
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <time datetime="<?php the_time('Y-m-j') ?>"><?php the_time(get_option('date_format')) ?></time>
        </section>
<?php
    }
}
?>
</article>
<footer id="pagination">Page: 
<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5
) );
?>
</footer>
<?php
get_footer();
?>
