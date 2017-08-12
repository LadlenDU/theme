<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (is_sticky() && is_home() && !is_paged()) : ?>
            <span class="sticky-post"><?php _e('Featured', 'twentysixteen'); ?></span>
        <?php endif; ?>

        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
    </header><!-- .entry-header -->

    <div class="entry-content-wrapper">

        <div class="entry-content-wrapper-2">
            <div class="entry-content-thumbnail">
                <?php twentysixteen_post_thumbnail(); ?>
            </div>
            <div class="entry-content-excerpt">
                <?php
                    //get_post_();
                    the_excerpt();
                    ?>
            </div>
        </div>

        <a class="moretag" href="<?php echo get_permalink(get_post()->ID) ?>"><?php echo __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ) ?></a>

        <footer class="entry-footer">
            <?php
                //twentysixteen_entry_meta();
                if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
                    echo '<span class="comments-link">';
                    comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'twentysixteen' ), get_the_title() ) );
                    echo '</span>';
                }
            ?>
		<?php
            edit_post_link(
            sprintf(
            /* translators: %s: Name of current post */
            __('Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen'),
            get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->

    </div>

</article><!-- #post-## -->
