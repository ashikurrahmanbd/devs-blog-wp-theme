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
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo get_template_directory_uri();  ?>/assets/images/profile.png" alt="image" >			
					
					<div class="bio mb-3">Hi, my name is Anthony Doe. Briefly introduce yourself here. You can also provide a link to the about page.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
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
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="#" target="_blank">Get in Touch</a>
				</div>
			</div>
		</nav>
    </header>