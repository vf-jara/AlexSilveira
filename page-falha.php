<?php
// Template Name: falha Mensagem
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="text-center my-5">
<h1 class="titulo-principal">A mensagem não pôde ser enviada!</h1>
  <p class="texto-geral">Algo deu errado ao enviar sua mensagem, pedimos que tente novamente em instantes.</p>

<a href="/contato" class="btn btn-2">Voltar</a>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>