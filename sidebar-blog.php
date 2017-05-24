<div class="col-md-4">
    <h3>Sidebar</h3>

    <!-- sidebar widget goes here -->
    <?php if(dynamic_sidebar( 'blog-sidebar' )) : ?>
    <?php else: ?>
        <p>You can add your widgets here!</p>
    <?php endif; ?>

</div>