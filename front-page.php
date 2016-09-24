<?php get_header(); ?>

<video autoplay loop muted poster="<?php echo esc_url(home_url()); ?>/wp-content/themes/basicTheme/images/screenshot.png" id="background" class="visible-md visible-lg blackened">
	<source src="<?php echo esc_url(home_url()); ?>/wp-content/themes/basicTheme/images/vbackground.mp4" type="video/mp4">
</video>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header front-header" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <?php the_field('main_header_text'); ?>
                    <hr class="small">
                    <div class="subheading"><?php the_field('main_header_subtext'); ?></div>
                    <button class="btn btn-default" onclick="window.location.href='contacto'">Contacto</button>
                </div>
            </div>
        </div>
    </div>
</header>

<?php get_footer(); ?>