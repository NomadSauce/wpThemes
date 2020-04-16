<?php get_header();?>

<section class="page-wrap">
    <div class="container text-left post-card tex-muted">
        <div class="card">
            <h2 class="card-header text-warning text-right" >
                <?php the_title();?>
            </h2>
            <div class="card-body">
            <?php get_template_part('/includes/section','blogcontent');?>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>