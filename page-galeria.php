<?php
// Template Name: Menu-galeria
?>
<?php get_header(); ?>
<!-- Adiciona o status ativo ao item atual da Navbar -->
<script type="text/javascript">
    const elemento = document.getElementById("nav-galeria");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>

<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
  <div class="row mt-1">

<!-- ABERTURA DE REPETIDOR MODELO CMB2 PARA CARDS DE GALERIA-->
      <?php $galerias = get_field('galeria'); ?>
      <?php if(isset($galerias)) {foreach($galerias as $galeria) { ?>
<!-- MOLDE DO CARD DE GALERIA-->
    <div class="col-md-3 mb-5">
      <div class="box-galeria my-1">
        <div class="galeria-cover" style="background-image: url(<?php echo $galeria['capa_galeria'];?>)">

        </div>
        <div class="galeria-title">
         <a href="<?php echo $galeria['link_galeria']; ?>"> <p class="texto-geral"><?php echo $galeria['titulo_galeria']; ?></p></a>
        </div>
      </div>
    </div>
<!--FIM DO MOLDE-->
    <?php } } ?>   
<!--FIM DA REPETIÇÃO CMB2-->    
  </div>

</div>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>