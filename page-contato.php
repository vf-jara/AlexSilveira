<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<!-- Adiciona o status ativo ao item atual da Navbar -->
<script type="text/javascript">
    const elemento = document.getElementById("nav-contato");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section>
  <div class="container">
    <!--Layout separado em colunas 50 50 -->
    <div class="row mt-3 mb-5">
      <div class="col-md-6">
        <!--Coluna da Esquerda-->
        <div class="container title-animation text-center mt-3">
          <h1 class="titulo-principal display-3">Entre em Contato!</h1>
          <div class="my-5">
            <h5 class="titulo-secundario">Aos profissionais da àrea da saúde:</h5>
            <p class="texto-geral"> Consultorias e informações sobre as turmas disponíveis para o Curso de Adequação
              Postural
              em Cadeira de Rodas.
            </p>
          </div>
          <div>
            <h5 class="titulo-secundario">Aos pais e mães:</h5>
            <p class="texto-geral"> Informações sobre Adequação Postural e confecção individualizada de cadeira de
              rodas, parapódiuns e andadores de forma a garantir o máximo potencial de autonomia funcional.
            </p>
          </div>
        </div>
      </div>
      <!--Coluna da Direita com formulário-->
      <div class="col-md-6 p-3">
        <div class="form-container title-slideRight">
          <form name="contato" method="POST" action="<?php echo get_template_directory_uri(); ?>/email.php">
            <div class="texto-form mb-3">
              <label for="nome"></label>
              <input type="text" id="nome" name="nome" class="text-center" placeholder="Seu nome" required="required">
            </div>
            <div class="mb-3">
              <label for="email"></label>
              <input type="text" id="email" name="email" class="text-center" placeholder="Seu Email"
                required="required">
            </div>
            <div>
              <textarea name="mensagem" id="mensagem" placeholder="Deixe sua mensagem"></textarea>
            </div>
            
            <input type="submit" class="btn btn-1">
           <!-- <div class="g-recaptcha mt-3" data-sitekey="6LexxjgcAAAAAO2kHwW-NtfxO_eXWmJVExYLu06p"></div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
