<?php get_header(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
  url('https://drscdn.500px.org/photo/125850765/q%3D80_m%3D1500/58833313ad6df84238c6bacb672354be') no-repeat center center fixed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Error 404</h1>
                        <hr class="small">
                        <span class="subheading">Página no encontrada</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <hr>

                <?php endwhile; else : ?>
                    <p><?php _e( 'Lo sentimos, al parecer la página a la que intentas acceder no existe.' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>