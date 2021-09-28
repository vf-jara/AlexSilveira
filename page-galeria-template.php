<?php
// Template Name: Galeria-template
?>
<?php get_header(); ?>

<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container mb-5">
    <div id="masonry">
        <?php cmb2_output_file_list( 'galeria_file_list', 'small' ); ?>  
    </div>
    
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>