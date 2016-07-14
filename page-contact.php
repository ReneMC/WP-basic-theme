<?php

/*
 * TEMPLATE NAME: CONTACT
 */

get_header(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->

    <header class="intro-header" style="background-image: url('<?php the_field('contact_header_image'); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_field('contact_title'); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_field('contact_subtitle'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p><?php the_field('contact_text'); ?></p>
                <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form"]'); ?>
            </div>
        </div>
    </div>

    <hr>


<!--========= Contact form 7 config ==========-->
<!--<div class="row control-group">-->
<!--  <div class="form-group col-xs-12 floating-label-form-group controls">-->
<!--    <label>Your Name (required)</label><br/>-->
<!--    [text* your-name class:form-control placeholder "Your Name" id:name]-->
<!--  </div>-->
<!--</div>-->
<!---->
<!--<div class="row control-group">-->
<!--  <div class="form-group col-xs-12 floating-label-form-group controls">-->
<!--    <label>Email Address</label>-->
<!--    [email* your-email class:form-control id:email placeholder "Your Email Address"]-->
<!--  </div>-->
<!--</div>-->
<!---->
<!--<div class="row control-group">-->
<!--  <div class="form-group col-xs-12 floating-label-form-group controls">-->
<!--    <label>Message</label>-->
<!--    [textarea your-message class:form-control id:message x5 placeholder "Message"]-->
<!--  </div>-->
<!--</div>-->
<!---->
<!--<br>-->
<!---->
<!--<div class="row">-->
<!--  <div class="form-group col-xs-12">-->
<!--    [submit class:btn class:btn-default "Send"]-->
<!--  </div>-->
<!--</div>-->


<?php get_footer(); ?>