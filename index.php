<?php get_header();?>
<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?> 
                <section class="container-fluid bg-color1">
                    <div class="row bg-wave pt-5 pb-5">
                        <div class="col position-relative">
                        
                            <h1 class="fc-dark text-start" >
                                <?php echo get_the_title();?>
                            </h1>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col mt-3 p-2 p-md-5">
                            <?php the_content(); ?>
                        </div>
                    </div>
                        
                        
                </section>
                <?php endwhile; ?>
                <?php endif; ?> 
<?php get_footer();?>