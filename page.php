<?php get_header(); ?>
    
    <div class="main-wrapper">
	    <div class="page-header">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
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