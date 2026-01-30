<?php get_header(); ?>
<?php
    echo '<main>';
    the_post();
    echo '<h1 class="page-title">' . get_the_title() . '</h1>';
    the_content();
    echo  '</main>';
?>
<?php get_footer(); ?>