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
      <?php $cursos = get_field('curso');

    //ORDENAÇÃO DOS CURSOS DE ACORDO COM A DATA
      usort($cursos, function($a1, $a2) {
        $date_v1 = str_replace('/', '-', $a1['data_curso']);
        $date_v2 = str_replace('/', '-', $a2['data_curso']);
        $v1 = strtotime($date_v1);
        $v2 = strtotime($date_v2);
        //return $v1 - $v2;
        return $v2 - $v1; //reverse direction
        });   
      ?>

        <!-- EXIBIÇÃO DOS CARDS DE CURSO AINDA NÃO REALIZADOS-->
      <?php if(isset($cursos)) {foreach($cursos as $curso) { 
        if($curso['curso_realizado']== false) {
        ?>
      

        <!-- MOLDE DE EXIBIÇÃO DE CURSO -->

      <div id="coluna-curso" class="col-md-4 mb-3 position-relative" >

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

    <?php } } }?>         
<!-- FIM DA REPETIÇÃO -->

<!--EXIBIÇÃO DOS CURSOS JÁ REALIZADOS-->

<?php if(isset($cursos)) {foreach($cursos as $curso) { 
        if($curso['curso_realizado']== true) {
        ?>
      
        <!-- MOLDE DE EXIBIÇÃO DE CURSO -->

      <div id="coluna-curso" class="col-md-4 mb-3 position-relative" >

        <!-- MARCAÇÃO DE CURSO JÁ REALIZADO -->

          <div class="realizado-badge">CURSO REALIZADO</div>

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



    <?php } } }?>         
      
  </div>
</div>
      
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>