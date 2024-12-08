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
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
				<div class="blog-comments-section">
					
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	    <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                <figure class="promo-figure">
			        <a href="#" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/promo-banner.jpg" alt="image"></a>
			    </figure>
		    </div><!--//container-->
	    </section><!--//promo-section-->
	    
	    <?php get_footer(); ?>