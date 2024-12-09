<?php get_header(); ?>
<?php 
				
    $thubnail_url = get_the_post_thumbnail_url( get_the_ID() );

    //Publish Days Ago
    $published_date = get_the_date('U'); // Get the post's publish date as a Unix timestamp
    $current_date = current_time('U'); // Get the current time as a Unix timestamp
    $time_diff = human_time_diff($published_date, $current_date);
    //end of publish days ago

    //estimate reading time

    $content = get_post_field('post_content', get_the_ID()); // Get the post content
    $word_count = str_word_count(strip_tags($content)); // Count words in the content
    $reading_time = ceil($word_count / 200); // Estimate based on 200 words per minute

    //end of estimate reading time

?>
    
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php the_title(); ?></h2>
				    <div class="meta mb-3"><span class="date">Published <?php echo $time_diff; ?> ago</span><span class="time">5 min read</span><span class="comment"><a href="#"><?php echo get_comments_number(); ?> comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="https://made4dev.com">
                            <img class="img-fluid" src="<?php echo $thubnail_url; ?>" alt="image">
                        </a>
				       
				    </figure>
				   <div class="post-body-content">
                        <?php the_content(); ?>
                   </div>
			    </div>
				    
			    <nav class="blog-nav nav nav-justified my-5">

					
					<?php

						// Get previous and next post objects
						$prev_post = get_adjacent_post(false, '', true); // true for previous post
						$next_post = get_adjacent_post(false, '', false); // false for next post

					?>
					
					<?php if ($prev_post): ?>
						<a class="nav-link-prev nav-item nav-link rounded-left" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
							<?php echo 'Previous: ' . esc_html(wp_trim_words( $prev_post->post_title, 6, '...' )); ?>
							<i class="arrow-prev fas fa-long-arrow-alt-left"></i>
						</a>
					<?php endif; ?>



					<?php if ($next_post): ?>
						<a class="nav-link-next nav-item nav-link rounded-right" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
							<?php echo 'Next: ' . esc_html(wp_trim_words( $next_post->post_title, 6, '...' )); ?>
							<i class="arrow-next fas fa-long-arrow-alt-right"></i>
						</a>
					<?php endif; ?>




				</nav>
				
				<div class="blog-comments-section">
					
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>

        <?php

            $promo_heading = get_post_meta( get_the_ID(), 'post_promotion_heading_id', true);

            $promo_description = get_post_meta( get_the_ID(), 'post_promotion_description_id', true );

            $promotion_image = get_post_meta(get_the_ID(), 'post_protion_image', true);

            $promotion_action_link = get_post_meta(get_the_ID(), 'promotion_image_url', true);


        ?>
	    
        <?php if($promo_heading || $promo_description): ?>
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
                        
                <?php if($promo_heading): ?>
			    <h2 class="title"><?php echo esc_attr__( $promo_heading. 'devs-blog' ); ?></h2>
                <?php endif; ?>


                <?php if($promo_description): ?>
			    <p><?php echo esc_attr__( $promo_description. 'devs-blog' ); ?></p>
                <?php endif; ?>

                <?php if($promotion_image): ?>
                <figure class="promo-figure">
			        <a href="<?php echo $promotion_action_link; ?>" target="_blank"><img class="img-fluid" src="<?php echo $promotion_image; ?>" alt="image"></a>
			    </figure>
                <?php endif; ?>
		    </div><!--//container-->
	    </section><!--//promo-section-->
        <?php endif; ?>
	    
	    <?php get_footer(); ?>