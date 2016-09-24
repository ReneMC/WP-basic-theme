<?php

/**
 * SINGLE POST TEMPLATE
 */

get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php the_field('post_header_image'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-heading">
                    <h1><?php the_title();  ?></h1>
                    <!--<h2 class="subheading">Problems look mighty small from 150 miles up</h2> THIS IS SUBTITLE-->
                    <span class="meta">Publicado por <a href="#"><?php the_author(); ?></a>, <?php echo get_the_date('F, j, Y'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
        </div>
    </div>
</article>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<nav>
    <ul class="pager">
        <li><?php previous_post_link(); ?></li>
        <li><?php next_post_link(); ?></li>

    </ul>
</nav>

<hr>

<?php get_footer(); ?>
