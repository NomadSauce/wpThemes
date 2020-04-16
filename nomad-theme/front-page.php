<?php get_header();?>

<section class="page-wrap">
    <div class="container-fluid text-center">

        <h2><?php the_title();?></h2>

        <div class="card">
            <?php get_template_part('/includes/section','content');?>
        </div>

        

        <div class="row text-center">
            <div class="card col border">
                <div class="card-header">
                    Left Card
                </div>
                <div class="card-body">

                </div>
                
            </div>
            <div class="card col border">
                <div class="card-header">
                    Right Card
                </div>
                <div class="card-body">

                </div>
                
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>