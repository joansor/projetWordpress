<?php get_header();?>

<section class="page-wrap">
<div class="container">


    <!-- <h1><?php the_title();?></h1> -->

    <?php get_template_part('includes/section','archive');?>

    <?php previous_posts_link();?>
    <?php next_posts_link();?>


</div>
</section>



<?php get_footer();?>