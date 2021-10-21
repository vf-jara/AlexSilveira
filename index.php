<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="mb-3" style="
    margin-top: -60px;
    height:200px; 
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-image:url(<?php the_field('img_post');?>)">
</div>
<article>
  <div class="container">
    <div class="my-5">
      <h1 class="display-5 titulo-principal px-4"><?php the_title(); ?></h1>
    </div>
    <div class="texto-geral justified mb-5 pb-5 px-2 mx-auto">
      <?php the_content(); ?>
    </div> 
  </div>
</article>

<?php endwhile; else: ?>
<p><?php _e("<h1>Erro 404 - Página não encontrada </h1>"); ?></p>
<?php endif; ?>
<?php get_footer(); ?>