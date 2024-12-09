<!DOCTYPE html>
<?php global $devs_blog; ?>
<html <?php language_attributes(); ?>> 
<head>

    <!-- title will append dynamically -->
    
    <!-- Meta -->
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <!-- dynamically added -->
    
    <!-- Theme CSS -->  
	<!-- dynamicss added theme css -->

	<?php wp_head(); ?>
</head> 

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
    
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="<?php echo home_url(); ?>"><?php echo $devs_blog['db_site_title']; ?></a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >


				<div class="profile-section pt-3 pt-lg-0">

					<?php

						$author_profile = isset($devs_blog['db_site_author_image']) ? $devs_blog['db_site_author_image']['url'] : '';

						$author_bio = isset($devs_blog['db_site_author_bio']) ? $devs_blog['db_site_author_bio'] : '';

						$author_twitter = isset($devs_blog['db_site_author_twitter']) ? $devs_blog['db_site_author_twitter'] : '';

						$author_linkedin = isset($devs_blog['db_site_author_linkedin']) ? $devs_blog['db_site_author_linkedin'] : '';

						$author_github = isset($devs_blog['db_site_author_github']) ? $devs_blog['db_site_author_github'] : '';

						$author_stackoverflow = isset($devs_blog['db_site_author_stackoverflow']) ? $devs_blog['db_site_author_stackoverflow'] : '';

						$author_codepen = isset($devs_blog['db_site_author_codepen']) ? $devs_blog['db_site_author_codepen'] : '';



					?>


				    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo $author_profile; ?>" alt="image" >			
					
					<div class="bio mb-3">
						<?php echo $author_bio; ?>
						
					</div>

					<ul class="social-list list-inline py-3 mx-auto">


						<?php if($author_twitter): ?>
			            <li class="list-inline-item"><a href="<?php echo $author_twitter; ?>"><i class="fab fa-twitter fa-fw"></i></a></li>
						<?php endif; ?>

						<?php if($author_linkedin): ?>
			            <li class="list-inline-item"><a href="<?php echo $author_linkedin; ?>"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
						<?php endif; ?>

						<?php if($author_github): ?>
			            <li class="list-inline-item"><a href="<?php echo $author_github; ?>"><i class="fab fa-github-alt fa-fw"></i></a></li>
						<?php endif; ?>

						<?php if($author_stackoverflow): ?>
			            <li class="list-inline-item"><a href="<?php echo $author_stackoverflow; ?>"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
						<?php endif; ?>

						<?php if($author_codepen): ?>
			            <li class="list-inline-item"><a href="<?php echo $author_codepen; ?>"><i class="fab fa-codepen fa-fw"></i></a></li>
						<?php endif; ?>

			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				
				<!-- <ul class="navbar-nav flex-column text-left">

					<li class="nav-item active">
					    <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
					</li>

				</ul> -->

				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-menu', // Matches the registered menu location
						'menu_class'     => 'navbar-nav flex-column text-left', // Classes for the <ul> element
						'container'      => false, // Removes the wrapping <div>
						'link_before'    => '', // Adds an icon placeholder (can customize per item)
						'fallback_cb'    => false, // No fallback if no menu is assigned
					));
				?>
				
				<?php 

					$author_cta = isset($devs_blog['db_site_author_cta_text']) ? $devs_blog['db_site_author_cta_text'] : '';

					$author_cta_link = isset($devs_blog['db_site_author_cta_link']) ? $devs_blog['db_site_author_cta_link'] : '';

				?>

				<?php if($author_cta): ?>
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="<?php echo $author_cta_link; ?>" target="_blank"><?php echo $author_cta; ?></a>
				</div>
				<?php endif; ?>


			</div>
		</nav>
    </header>