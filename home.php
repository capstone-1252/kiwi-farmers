<main>
    <div class="container">
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
</main>