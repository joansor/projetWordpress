<?php get_header();?>

<section class="page-wrap">
    <div class="container">

        <h1><?php the_title();?></h1>

        <?php if (has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">


        <?php endif;?>


        <div class="row">


            <div class="col-lg-6">
                <?php get_template_part('includes/section','cars');?>


                <?php wp_link_pages();?>

            </div>

            <div class="col-lg-6">

<ul>
    <li>
        Colour: <?php the_field('colour');?>
    </li>

 
    <li>
        Registration: <?php the_field('registration');?>
    </li>
    
</ul>

    <h3>Features</h3>
<ul>
    <?php if(have_rows('features')):?>

        <?php
        while( have_rows('features')): the_row();
        $feature = get_sub_field('features'); ?>
    <li>

    <?php echo $feature; ?>

    </li>
    <?php endwhile;?>
    <?php endif; ?>

</ul>

            </div>

        </div>

        
    
    </div>
</section>



<?php get_footer();?>