<?php

/**
 * Loop Name: Content Hero
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('content-item -hero'); ?>>
    <div class="pic">
        <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            } else {
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/thumb.jpg" alt="' . get_the_title() . '" />';
            } ?>
        </a>
    </div>
    <div class="info">

        <header class="entry-header">
            <?php //แสดงหมวดหมู่
            $terms = get_the_terms($post->ID, 'cat_srikrung');
            foreach ($terms as $term) {
                echo '<p class="cat _heading" style="display:inline;"><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>'." ";
            }
            ?>
            <?php
            

            //แสดงชื่อหมวดหมู่ไม่ได้

            /* if ( $category[0] ) {
                   echo '<p class="cat _heading"><a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a></p>';
                }
                */
            ?>
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            <?php echo "<p style='font-size:14px;'>" . get_the_date() . "</p>"; ?>
        </header>

        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php seed_posted_on(); ?>
            </div>
        <?php endif; ?>

        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>

        <?php seed_author(get_the_author_meta('ID')); ?>
    </div>
</article>