<?php

/*
 * TEMPLATE NAME: ABOUT US
 */

get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php the_field('about_header_image'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1><?php the_field('about_title'); ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php the_field('about_subtitle'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">

            <p><?php the_field('about_content'); ?></p>
            
        </div>
    </div>
    
    
		<!-- Portfolio Item 1 Row -->
        <div class="row">
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<h3>Project Description</h3>
            	</div>
            	<div class="panel-body">
					<div class="col-md-4">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
						<h3>Project Details</h3>
						<ul>
							<li>Lorem Ipsum</li>
							<li>Dolor Sit Amet</li>
							<li>Consectetur</li>
						</ul>
						<button class="btn btn-default">Ir al sitio</button>
					</div>

					<div class="col-md-8">
					   <img src="https://unsplash.it/750/500?random" class="img-responsive" alt="Responsive image">
					</div>
            	</div>
            </div>

        </div>
        <!-- /.row -->
        
        
        <br>
        
		<!-- Portfolio Item 2 Row -->
        <div class="row">
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<h3>Project Description</h3>
            	</div>
            	<div class="panel-body">
					<div class="col-md-4">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
						<h3>Project Details</h3>
						<ul>
							<li>Lorem Ipsum</li>
							<li>Dolor Sit Amet</li>
							<li>Consectetur</li>
						</ul>
						<button class="btn btn-default">Ir al sitio</button>
					</div>

					<div class="col-md-8">
					   <img src="https://unsplash.it/750/500?random" class="img-responsive" alt="Responsive image">
					</div>
            	</div>
            </div>

        </div>
        <!-- /.row -->
        
        <hr class="small">
        
        
		<!-- Portfolio Item 3 Row -->
        <div class="row">
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<h3>Project Description</h3>
            	</div>
            	<div class="panel-body">
					<div class="col-md-4">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
						<h3>Project Details</h3>
						<ul>
							<li>Lorem Ipsum</li>
							<li>Dolor Sit Amet</li>
							<li>Consectetur</li>
						</ul>
						<button class="btn btn-default">Ir al sitio</button>
					</div>

					<div class="col-md-8">
					   <img src="https://unsplash.it/750/500?random" class="img-responsive" alt="Responsive image">
					</div>
            	</div>
            </div>

        </div>
        <!-- /.row -->
    
    
</div>

<hr>

<?php get_footer(); ?>
