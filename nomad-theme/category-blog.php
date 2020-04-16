<?php get_header();?>

<section class="page-wrap">
    <div class="container-fluid text-center">
    <h2 class="text-muted text-center card-header">
            <?php echo single_cat_title();?>
        </h2>
        <div class="card-body d-flex flex-wrap justify-content-around">
            <?php get_template_part('/includes/section','archive');?>
            <?php previous_posts_link();?>
            <?php next_posts_link();?>
        </div>
    </div>
</section>



<?php get_footer();?>