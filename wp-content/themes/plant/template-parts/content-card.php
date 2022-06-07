<?php
/**
 * Loop Name: Content Card
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('content-item -card'); ?>>
    <div class="pic">
        <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
            <?php if(has_post_thumbnail()) { the_post_thumbnail();} else { echo '<img src="' . esc_url( get_template_directory_uri()) .'/img/thumb.jpg" alt="'. get_the_title() .'" />'; }?>
        </a>
    </div>
    <div class="info">
        <header class="entry-header">
        <?php //แสดงหมวดหมู่
            $terms = get_the_terms($post->ID, 'cat_srikrung');
            foreach ($terms as $term) {
                echo '<p class="cat _heading" style="display:inline;font-size:11px;"><a href="' . get_term_link($term) . '">' . $term->name . '</a></p>'." ";
            }
            ?>
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <div class="entry-meta">
                <?php do_action('plant_begin_archive_meta'); ?>
                <?php 
                    seed_posted_on(); 
                    // seed_posted_by();
                    seed_posted_cats();
                ?>
                <?php do_action('plant_end_archive_meta'); ?>
            </div>
        </header>

        <div class="entry-summary">

            <?php the_excerpt();?>
        </div>
    </div>
    <?php seed_author(get_the_author_meta('ID'));?>
</article>