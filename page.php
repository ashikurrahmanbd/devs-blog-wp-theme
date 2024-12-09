<?php get_header(); ?>
    
    <div class="main-wrapper">
	    <div class="page-header">
            <section class="cta-section theme-bg-light py-5">
                <div class="container text-center">
                    <h2 class="heading"><?php the_title(); ?></h2>
                </div>
            </section>
        </div>
	    <section class="page px-3 py-5 p-md-5">
		    <div class="container">
			    
                <?php 
                   while(have_posts(  )){
                        the_post();
                        the_content();
                   } 
                ?>

		    </div>
	    </section>
	    
	    <?php get_footer(); ?>