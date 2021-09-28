<?php
// Template Name: Blog
?>
<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-blog");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>
<!--Início dos cards de curso-->

<section>
  <div class="container mb-5 mx-auto">
    <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <div class="col-md-4">
        <div class="card mb-5 w-30">
          <div class="card-img-top" style="background-image:url(<?php the_field('img_post'); ?>)">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <div class="card-container">
            <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
            <ul class="list-group list-group-flush data-position pb-3">
              <li class="list-group-item"><strong>Por: </strong>Alex Silveira</li>
              <li class="list-group-item"><strong>Publicado em: </strong><?php echo get_the_date(); ?></li>
            </ul>
            <a href="<?php the_permalink(); ?>" target="_blank" class="btn btn-2 btn-position">Saiba mais</a>
          </div>
        </div>
      </div>
  <?php endwhile;?>
    <div class="text-center">
        <?php next_posts_link('publicações antigas'); ?>
        <?php previous_posts_link('publicações novas'); ?>
    </div>

  <?php  else : endif; ?>
</section>
<?php get_footer(); ?>