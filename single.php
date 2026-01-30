<?php get_header(); ?>
<main>

    <?php the_post(); ?>
    <?php if (has_post_thumbnail()): ?>
        <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
        <img src="<?= $featured_image[0]; ?>" alt='' class="img-fluid" />
    <?php endif; ?>

    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php if ( has_post_thumbnail() ) :

    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full' ); ?>

    <img src="<?= $featured_image[0]; ?>" alt='' class="img-fluid" />

    <?php endif; ?>
    <h1 class="page-title"> <?php the_title(); ?> </h1>
    <p><b>Category:</b> <?php the_category(', '); ?> </p>
    <p><b>Tags:</b> <?php the_tags(' ', ' | '); ?> </p>
    <p><b>Author:</b> <?php the_author(); ?> </p>
    <p><b>The Date:</b> <?php the_date(); ?> </p>
    <?php the_content(); ?>
    <?php the_post_navigation( array(
        'next_text' => '<span class="next-p">Next post: </span><span class="post-title">%title</span>',
        'prev_text' => '<span class="prev-p">Previous post: </span><span class="post-title">%title</span>',
        ) );
    ?>

</main>
<?php get_footer(); ?>