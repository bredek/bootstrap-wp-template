<?php get_header() ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">

    <!-- The Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
    <div class="col-md-4">
        <!-- sidebar widget goes here -->
        <?php if(dynamic_sidebar( 'front-left' )) : ?>
        <?php else: ?>
            <h1>No content here :(</h1>
        <?php endif; ?>
    </div>
    <div class="col-md-4">
        <!-- sidebar widget goes here -->
        <?php if(dynamic_sidebar( 'front-left' )) : ?>
        <?php else: ?>
            <h1>No content here :(</h1>
        <?php endif; ?>
    </div>
    <div class="col-md-4">
        <!-- sidebar widget goes here -->
        <?php if(dynamic_sidebar( 'front-left' )) : ?>
        <?php else: ?>
            <h1>No content here :(</h1>
        <?php endif; ?>
    </div>
    </div>


<?php get_footer() ?>