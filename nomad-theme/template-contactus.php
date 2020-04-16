<?php
/*
Template Name: Contact Us.
*/
?>

<?php get_header();?>

<div class="container-fluid text-center bg-light border-secondary my-3">

    <div class="card row border-secondary bg-white mx-auto">
        <h2 class="card-header bg-warning text-light rounded">
            <?php the_title();?>
        </h2>
        <div class="card-body rounded-0 mb-3 bg-transparent">
            <h2 class="card-header">
                <?php get_template_part('/includes/section','content');?>
            </h2>
        </div>
        <div class="card-footer rounded-0 bg-transparent p-3">
        </div>
    </div>
    <div class="row mx-auto justify-content-around">
        <div class="col-sm-5 p-0 card text-muted">
            <h6 class="card-header text-muted">This is where contact form goes</h6>
            <div class="card-body p-5 bg-white">

            </div>
            <div class="card-footer mx-0 bg-transparent">
            </div>
        </div>
        <div class="col-sm-5 p-0 card text-muted">
            <h6 class="card-header">This is where nudes goes</h6>
            <div class="card-body">

            </div>
            <div class="card-footer mx-0 bg-transparent">
            </div>
        </div>  
    </div>
</div>

<?php get_footer();?>
