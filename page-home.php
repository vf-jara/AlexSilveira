<?php
// Template Name: Home
?>
<?php get_header(); ?>
<!-- Adiciona o status ativo ao item atual da Navbar -->
<script type="text/javascript">
    const elemento = document.getElementById("nav-home");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--Capa do site-->
    <section id="capa" class="mb-5">
        <div class="container">
            <!--reverse usado pra inverter ordem de apresentação em telas menores-->
            <div class="row reverse">
                <div class="col-md-6 text-center m-auto title-animation">
                    <div class="position-relative">

                    <h1 class="display-1 titulo-principal">Alex Silveira</h1>
                    <small class="crefito position-absolute">Crefito 10 / 237146-F</small>
                    <div>
                        
                    </div>
                    </div>                  
                    <h2 class="subtitulo">Excelência em Adequação Postural</h2>
                </div>
                <div class="col-md-6 m-auto">
                    <img class="imagem1" src="<?php echo get_stylesheet_directory_uri(); ?>/src/alex-foto.png" alt="Foto de Alex Silveira">
                    <img class="imagem2" src="<?php echo get_stylesheet_directory_uri(); ?>/src/alex-foto2.png" alt="Foto de Alex Silveira">
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#quemSouEu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/19ca7c_e01afec2fcb34377af8a44555d0b35fc_mv2.gif"
                        style="width:50px; height: 50px"> </a>
            </div>

        </div>
    </section>

    <section id="quemSouEu" class="mt-3 mb-5 py-5">

        <div class="container">
            <div class="quemsoueu-conteudo">
                <div>
                    <h2 class="display-4 titulo-secundario">Quem sou eu</h2>
                    <h4 class="subtitulo">Fisioterapeuta e Ortotécnico</h4>
                </div>


                <div class="texto-geral mt-5">
                    <p>
                        <?php the_field('resumo'); ?>
                    </p>
                    <p class="">
                        Quer saber como minha história começou e um pouco mais a respeito do meu trabalho hoje?<br>
                    </p>
                </div>
            </div>
            
            <div class="quemsoueu-conteudo">
                <a href="/sobre/" class="btn btn-2 texto-geral">Quero conhecer</a>
            </div>
        </div>
    </section>
    <div class="text-center mt-5">
        <a href="#boxes"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/19ca7c_e01afec2fcb34377af8a44555d0b35fc_mv2.gif"
                style="width:50px; height: 50px"> </a>
    </div>
    <br>
    <br>
    <!--Cards da Home-->
    <section id="boxes" class=" pt-5  mt-2 mb-2">
        <!-- Classe coluna utilizada pra ordenar apresentação em telas menores-->
        <div class="d-flex coluna">
            <!--Box de cursos-->
            <div class="col-md-6 box-cursos text-start">
                <div>
                    <h2 class="display-5">Conheça <br> nossos cursos</h2>
                </div>
                <div class="my-4">
                    <p>Cursos de adequação postural mais atuais do mercado</p>
                </div>
                <div>
                    <a href="/cursos/" class=" btn btn-1">Clique e conheça <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!--Box de consultoria-->
            <div class="col-md-6 box-consultoria">
                <div>
                    <h2 class="display-5">Precisa de uma <br>consultoria?</h2>
                </div>
                <div class="my-4">
                    <p>Entre em contato e vamos agendar um café</p>
                </div>
                <div>
                    <a href="/contato/" class="btn btn-1">Entrar em contato <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class=" md-12 d-flex justify-content-center">
            <div class="box-adequacao text-center mt-3">
                <div>
                    <h2 class="display-5">Precisa de Prescrição de Equipamentos?</h2>
                </div>
                <div class="my-4">
                    <p>Agende sua Avaliação Postural</p>
                </div>
                <div>
                    <a href="https://materiais.alexsilveira.com/avaliacao-postural" target="_blank" class="btn btn-1">Agendar avaliação <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>


    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>
   