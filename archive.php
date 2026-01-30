<?php get_header(); ?>
<main>
    <div class="container">
        <div class="sidebar">
            <?php wp_list_categories(); ?>
            <?php
            wp_list_categories($args = array(
                'taxonomy'     => 'post_tag', // Specify 'post_tag' to list tags
                'orderby'      => 'name',
                'show_count'   => 1,          // Display the number of posts associated with each tag
                'title_li'     => '<h2>Tags</h2>', // Add a title for the list
                'hide_empty'   => 0           // Show tags even if they have no associated posts
            ));
            wp_list_categories($args);
            ?>
        </div>
        <div class="result">
            <?php the_archive_title(); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="post">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if (has_post_thumbnail()): ?>
                            <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                            <img src="<?= $featured_image[0]; ?>" alt='' class="img-fluid" />
                        <?php endif; ?>

                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts to display</p>
            <?php endif ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>