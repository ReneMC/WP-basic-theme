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
				<h3><?php the_field('project_name_1'); ?></h3>
			</div>
			<div class="panel-body">
				<div class="col-md-4">
					<p><?php the_field('project_description_1'); ?></h3>
					<h3>Tecnologías</h3>
					<ul>
						<?php the_field('project_details_1'); ?>
					</ul>
					<a class="btn btn-default" href="<?php the_field('project_url_1'); ?>" target="_blank">Ir al sitio</a>
				</div>

				<div class="col-md-8 hidden-xs">
				   <img src="<?php the_field('project_capture_1'); ?>" class="img-responsive" alt="<?php the_field('project_capture_alt_1'); ?>">
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
				<h3><?php the_field('project_name_2'); ?></h3>
			</div>
			<div class="panel-body">
				<div class="col-md-4">
					<p><?php the_field('project_description_2'); ?></h3>
					<h3>Tecnologías</h3>
					<ul>
						<?php the_field('project_details_2'); ?>
					</ul>
					<a class="btn btn-default" href="<?php the_field('project_url_2'); ?>" target="_blank">Ir al sitio</a>
				</div>

				<div class="col-md-8 hidden-xs">
				   <img src="<?php the_field('project_capture_2'); ?>" class="img-responsive" alt="<?php the_field('project_capture_alt_2'); ?>">
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
				<h3><?php the_field('project_name_3'); ?></h3>
			</div>
			<div class="panel-body">
				<div class="col-md-4">
					<p><?php the_field('project_description_3'); ?></h3>
					<h3>Tecnologías</h3>
					<ul>
						<?php the_field('project_details_3'); ?>
					</ul>
					<a class="btn btn-default" href="<?php the_field('project_url_3'); ?>" target="_blank">Ir al sitio</a>
				</div>

				<div class="col-md-8 hidden-xs">
				   <img src="<?php the_field('project_capture_3'); ?>" class="img-responsive" alt="<?php the_field('project_capture_alt_3'); ?>">
				</div>
			</div>
		</div>

	</div>
	<!-- /.row -->
    
</div><!--.container-->

<hr>

<?php get_footer(); ?>
