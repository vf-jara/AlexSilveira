<?php
// Template Name: Materiais
?>
<?php get_header(); ?>
<script type="text/javascript">
    const elemento = document.getElementById("nav-materiais");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>
<!--Início dos cards de curso-->

<section>
  <div class="container mb-5 mx-auto">
    <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $materiais = get_field('materiais');?>
    <?php if(isset($materiais)) {foreach($materiais as $material) { ?>
 
    <div class="col-md-4">
        <div class="card mb-5 w-30">
          <div class="card-img-material" style="background-image:url(<?php echo $material['img_material']; ?>); background-size: cover;">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $material['titulo_material'] ?></h5>
            <div class="card-container">
            <p class="card-text"><?php echo $material['txt_material'] ?></p>
            </div>
            <ul class="list-group list-group-flush data-position pb-3">
            </ul>
            <a href="<?php echo $material['link_material'] ?>" target="_blank" class="btn btn-2 btn-position">Baixar Agora</a>
          </div>
        </div>
      </div>

      <?php } } ?>  
  <?php endwhile;?>

  <?php  else : endif; ?>
</section>
<?php get_footer(); ?>