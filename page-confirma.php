<?php
// Template Name: mensagem
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="text-center my-5">
<h1 class="titulo-principal">Mensagem Enviada com Sucesso!</h1>
<p class="texto-geral">Obrigado pela sua mensagem, entraremos em contato o mais breve possível!</p>

<a href="/" class="btn btn-2">Voltar</a>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>