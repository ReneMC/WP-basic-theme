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
</div>

<hr>

<?php get_footer(); ?>
