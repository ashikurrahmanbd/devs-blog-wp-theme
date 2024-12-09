<?php get_header(); ?>
    
    <div class="main-wrapper">
	    <div class="page-header">
            <div class="container">
                <h2>
                    <?php 
                    // Display a dynamic archive title based on the type
                    if (is_category()) {
                        echo 'Category: ' . single_cat_title('', false);
                    } elseif (is_tag()) {
                        echo 'Tag: ' . single_tag_title('', false);
                    } elseif (is_author()) {
                        echo 'Author: ' . get_the_author();
                    } elseif (is_date()) {
                        echo 'Archive for ' . get_the_date('F Y');
                    } elseif (is_tax()) {
                        echo 'Taxonomy: ' . single_term_title('', false);
                    } else {
                        the_archive_title();
                    }
                    ?>
                </h2>
            </div>
        </div>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">

				<?php if(have_posts(  )): ?>
				<?php while(have_posts()) : the_post(); ?>
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
			    <div class="item mb-5">
				    <div class="media">
						
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo $thubnail_url;  ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo $time_diff;  ?> ago</span><span class="time"><?php echo $reading_time; ?> min read</span><span class="comment"><a href="#"><?php echo get_comments_number(); ?> comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
				<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>

			    
			    



			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    
	    <?php get_footer(); ?>