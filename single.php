<?php get_header();

while(have_posts()) {
    the_post(); ?> <!-- flip to html while in while loop -->
<!-- Write html here -->
    <h2>
        <?php the_title();?>
    </h2>
    <p>
        <?php the_content();?>
    </p>
<?php 
}

get_footer();
?>