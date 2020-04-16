<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="col-12 col-lg-4 m-4 card">
        <h2 class="card-header text-warning text-right"><?php the_title();?></h2>
        <div class="card-body text-left">
            <?php the_excerpt();?>
            <div class="card-footer bg-transparent">
                <a href="<?php the_permalink();?>" class="text-warnin btn btn-successg">Read More</a>
            </div>
        </div>
    </div>
<?php endwhile; else: endif;?>