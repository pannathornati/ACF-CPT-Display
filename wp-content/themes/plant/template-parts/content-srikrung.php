<style>
    .tags-links _heading {
        color: red;
    }
</style>
<?php

/**
 * Loop Name: Content Post Detail
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('content-single'); ?>>
    <?php if ('hidden' != get_theme_mod('body_title_hidden', '0') && 'hidden' != get_field('title_style')) : ?>
        <header class="entry-header">
            <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </a>
            <?php if ('srikrung' === get_post_type()) : ?>
                <div class="entry-meta">
                    <?php do_action('plant_begin_entry_meta'); ?>
                    <?php seed_posted_on(); ?>
                    <?php seed_posted_by(); ?>
                    <?php //แสดงหมวดหมู่
                    $terms = get_the_terms($post->ID, 'cat_srikrung');
                    $count = count($terms);
                    $i = 0;
                    echo '<span class="cat-links _heading">';
                    seed_icon('folder');
                    foreach ($terms as $term) {
                        if (++$i === $count) {
                            echo ' ' . $term->name;
                        } else {
                            echo ' ' . $term->name . " , ";
                        }
                    }
                    echo '</span>';
                    ?>
                    <?php do_action('plant_end_entry_meta');
                    //ดึงหมวดหมู่มาแสดงไม่ได้
                    ?>
                </div>
            <?php endif; ?>
        </header>
    <?php endif; ?>
    <div class="entry-content">




        <?php
        //แสดงรูปภาพ
        $posts = get_posts(array('post_type' => 'srikrung'));
        if (has_post_thumbnail($post->ID)) {
            echo '<center><a href="' . get_permalink($post->ID) . '" title="' . esc_attr($post->post_title) . '">';
            echo get_the_post_thumbnail($post->ID, 'full');
            echo '</a></center>';
        }
        ?>
        <?php //เนื้อหา
        do_action('plant_begin_entry_content'); ?>
        <?php the_content(); ?>
        <?php
        //แกลลอรี่
        $images = get_field('srikrung_gallery');
        if ($images) : ?>
            <div class="column-3">
                <?php foreach ($images as $image) : ?>
                    <a href="<?php echo esc_url($image['url']); ?>">
                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                    <p><?php echo esc_html($image['caption']); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php
        //ดาวน์โหลด
        $file = get_field('srikrung-download');
        if ($file) : ?>
            <center><a href="<?php echo $file['url']; ?>"><button style="margin-top:30px;">ดาวน์โหลดเอกสาร</button></a></center>
        <?php endif; ?>





        <?php //แสดงป้ายกำกับ

        $terms = get_the_terms($post->ID, 'tag_srikrung');
        if ($terms) {
            echo '<p class="tags-links _heading">';
            foreach ($terms as $term) {
                echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a> ';
            }
            echo '</p>';
        }
        ?>

        <?php do_action('plant_before_entry_tags'); ?>
        <?php seed_posted_tags(); ?>
        <?php do_action('plant_before_entry_author'); ?>
        <?php if ($GLOBALS['s_blog_profile'] == 'enable') : ?>
            <div class="entry-author">
                <div class="pic">

                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php echo get_avatar(get_the_author_meta('user_email'), apply_filters('author_bio_avatar_size', 160)); ?></a>
                </div>
                <div class="info">
                    <h2 class="name">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php the_author(); ?></a>
                    </h2>
                    <?php if (get_the_author_meta('description')) {
                        echo '<div class="desc">' . get_the_author_meta('description') . '</div>';
                    }
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <?php do_action('plant_end_entry_content'); ?>
    </div>
    <footer class="entry-footer">
        <?php seed_entry_footer(); ?>
    </footer>
</article>