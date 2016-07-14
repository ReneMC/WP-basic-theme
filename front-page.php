<?php get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header front-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php the_field('main_header_text'); ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php the_field('main_header_subtext'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<?php get_footer(); ?>