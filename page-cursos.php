<?php
// Template Name: Cursos
?>
<?php get_header(); ?>
<!-- Adiciona o status ativo ao item atual da Navbar -->
<script type="text/javascript">
    const elemento = document.getElementById("nav-cursos");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>

<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
<a href="https://materiais.alexsilveira.com/lista-de-espera" target="_blank">
  <div class="banner-agendamento mb-4">
  </div>
  </a>
<div class="container">
 
  <div class="row mb-5 mt-1">

    <!-- ABERTURA DE REPETIDOR MODELO CMB2 PARA CARDS DE CURSO-->
      <?php $cursos = get_field('curso'); ?>
      <?php if(isset($cursos)) {foreach($cursos as $curso) { ?>
      


        <!-- MOLDE DE EXIBIÇÃO DE CURSO -->

      <div id="coluna-curso" class="col-md-4 mb-3 position-relative" >

        <!-- MARCAÇÃO DE CURSO JÁ REALIZADO -->
        <?php if ($curso['curso_realizado'] == true ) : ?>
          <div class="realizado-badge">CURSO REALIZADO</div>
        <?php endif; ?>

        <div id="card-curso" class="cursos position-relative" style="background-image: url(<?php echo $curso['bg_curso'];?>)">
          <div class="local-badge position-absolute top-0 start-100"><?php echo $curso['local_curso']; ?></div>
            <h3 class="titulo-cursos"><?php echo $curso['titulo_curso']; ?>
              <hr>
            </h3>
            <div class="dados-curso">
              <ul class="texto-cursos list-unstyled">
                <li><strong>Local: </strong><span class="badge rounded-pill bg-warning text-dark"><?php echo $curso['local_curso']; ?></span></li>
                <li><strong>Data: </strong> <?php echo $curso['data_curso']; ?></li>
                <li><strong>Investimento: </strong>a partir de R$ <?php echo $curso['preco_curso']; ?></li>
                <hr class="mb-5">
            </div>
          <a href="<?php echo $curso['link_curso']; ?>" target="_blank" class="btn btn-1 btn-position">Saiba mais</a>
        </div>
      </div>
<!-- FIM DO MOLDE-->
    <?php $curso['curso-realizado'] = 0; ?>


    <?php } } ?>         
<!-- FIM DA REPETIÇÃO -->
      
  </div>
</div>
      
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>