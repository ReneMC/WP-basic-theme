<?php get_header(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo esc_url(get_template_directory_uri() );?>/images/blog.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Artículos <i class="fa fa-code" aria-hidden="true"></i> Blog</h1>
                        <hr class="small">
                        <span class="subheading">Ocasionalmente escribo sobre tecnología y desarrollo.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-preview" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
                        <h2 class="post-title">
                            <?php the_title();  ?>
                        </h2>
                       <h3 class="post-subtitle">
                           <?php the_excerpt(); ?>
                       </h3>
                    </a>
                    <p class="post-meta">Publicado por <a href="#"><?php the_author(); ?></a>, <?php echo get_the_date('F, j, Y'); ?></p>
                </div>
                <hr>

                <?php endwhile; else : ?>
                    <p><?php _e( 'Ups! no hay nada que ver aquí.' ); ?></p>
                <?php endif; ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="<?php next_posts_link('Older Posts'); ?>">Older Posts &rarr;</a>
                        <a href="<?php previous_posts_link('Newer Posts'); ?>">&larr; Newer Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

<?php get_footer(); ?>