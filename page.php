<?php
get_header();

if (have_posts()) {
        the_post();
?>
        <header>
            <h1><?php the_title(); ?></h1>
            <?php edit_post_link( __( 'Edit'), '<p>', '</p>' ); ?>
        </header>
        <?php the_content(); ?>
<?php
}
get_footer();
?>

