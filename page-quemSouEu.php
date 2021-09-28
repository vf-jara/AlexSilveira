<?php
// Template Name: Quem Sou Eu
?>
<?php get_header(); ?>
<!-- Adiciona o status ativo ao item atual da Navbar -->
<script type="text/javascript">
    const elemento = document.getElementById("nav-sobre");

    if (elemento.classList) elemento.classList.add("active");
    else elemento.className += " active";
</script>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="content mt-5 texto-geral">
  <div class="container justified">
    <div class="row">
      <div class="col-md-5">
        <img class="imagem1 title-slideRight" src="<?php echo get_stylesheet_directory_uri(); ?>/src/alex-foto.png" alt="Foto de Alex Silveira">
        <img class="imagem2 title-slideRight" src="<?php echo get_stylesheet_directory_uri(); ?>/src/alex-foto2.png" alt="Foto de Alex Silveira">
      </div>
      <div class="col-md-7 pt-5 title-animation">
        <div class="mb-5">
          <h1 class="display-3 subtitulo text-center">Quem é Alex Silveira</h1>
        </div>
        <div>
          <p>
            Olá, seja bem-vindo à minha página pessoal, aqui teremos a oportunidade de nos conhecer e aprender um
            com
            o
            outro.<br><br>
            Meu nome é Alex Silveira e sou graduado em Fisioterapia pela Associação Catarinense de Ensino (2015) e
            especializado em Ciência de Engenharia de Materiais pela Faculdade Unyleya.<br>
          </p>
        </div>
      </div>
    </div>
    <div class="mt-5 pt-3">
      <h4>Mas gostaria de te contar um pouco da minha história.</h4>
      <br>
      <p>
        Apesar de viver em Santa Catarina há 11 anos, nasci e
        cresci
        em São Paulo onde iniciei minha carreira em 2005 no saudoso e extinto <strong>Centro Paulista de Tecnologia
          Assistiva
          (CPTA)</strong> como assistente de manutenção em cadeira de rodas. Ali descobri o verdadeiro sentido das
        palavras
        <strong>MISSÃO</strong>
        e
        <strong>PROPÓSITO</strong> a cada paciente atendido, aprendi a olhar o potencial escondido e não a
        “deficiência aparente”. Ao
        longo
        dos anos fui me aperfeiçoando nas áreas de ferramentaria, solda, marcenaria, tapeçaria e costura que me
        permitiam
        começar e finalizar um equipamento sem depender de terceiros tornando-me <strong>ORTOTÉCNICO</strong>.
      </p>
    </div>
    <div class="row mt-3">
      <div class="col-md-4">
        <div class=" mx-auto img-sobre img-thumbnail">
        <img src="<?php the_field('img_sobre_1')?>" style="width:100%; height:100%;" alt="<?php the_field('img_description_1')?>;">
      </div>
      </div>
      <div class="col-md-8">
        <div class="my-3">
          <p>
            Posteriormente ao CPTA tive a oportunidade de trabalhar em uma indústria de equipamentos de tecnologia
            assistiva,
            tais como <strong>cadeira de rodas, estabilizadores verticais, andadores, entre muitos outros</strong>.
            Novamente tive a
            oportunidade de estar muito próximo de profissionais excelentes com os quais pude refinar todas as
            técnicas
            que
            já
            possuía, agregar algumas novas e aliar a isso a experiência de como era o mundo da produção em
            grande escala. Foi a partir daí que decidi buscar o conhecimento clínico/terapêutico através da
            graduação
            de
            <strong>Fisioterapia</strong> para responder algumas inquietudes que eu vinha acumulando ao longo dos
            anos
            como técnico.
          </p>
        </div>

      </div>
    </div>
    <div class=" row mt-5">
      <div class="col-md-8">
        <p>
          Em 2010 me mudei para Santa Catarina e estive a frente do meu maior desafio como profissional, tornando-me
          coordenador técnico/clínico da empresa <strong>Vivere Tecnologia Assistiva (VivereTA)</strong> sendo
          responsável pela
          implementação
          de uma nova percepção de atendimento clínico humanizado e um <strong>sistema de posicionamento e adequação
            postural
            progressivo, protocolável, porém dinâmico</strong>. Algo que favorecesse e fosse mais eficiente para as
          famílias e
          os
          pacientes atendendo às suas necessidades de curto e médio prazo. O mercado percebeu essa mudança a
          VivereTA
          ganhou
          visibilidade nacional e em pouco tempo começamos a atender presencialmente uma demanda reprimida em
          praticamente
          todos os Estados, bem como receber em nossa empresa pacientes que viajavam 3 mil km para estarem conosco.
          Novamente isso me fez lembrar daquela mesma <strong>MISSÃO e PROPÓSITO</strong> do início da minha
          carreira.
        </p>
      </div>
      <div class="col-md-4">
        <div class=" mx-auto img-sobre img-thumbnail">
        <img src="<?php the_field('img_sobre_2')?>" style="width:100%; height:100%; object-fit:cover;" alt="<?php the_field('img_description_2');?>">
        </div>
      </div>
    </div>
    <div class="mt-5">
      <p>
        Assim nasceram os <a href="cursos.html" style="text-decoration: none; color:var(--cor-principal)"><strong>cursos
            de capacitação,
            treinamentos e workshops.</strong></a> Era hora
        de
        repassar
        todo
        o conhecimento
        adquirido e acumulado ao longo dos anos para profissionais de grandes centros urbanos, mas principalmente de
        cidades longínquas para que pudessem proporcionar qualidade de vida, postura e conforto ao máximo de pessoas
        possíveis, porém sem perder a essência do <strong>atendimento clínico humanizado focado no potencial
          escondido
          e nunca
          apenas na deficiência!</strong>
      </p>
    </div>
    <div class="text-center my-5">
      <p>
      <h3>Esse é um breve resumo da minha história, espero que você tenha gostado e quem sabe possa fazer parte dela
        também.</h3>
      </p>
    </div>
    <div class="text-center mb-5">
      <span><a href="/cursos/" class="btn btn-2">Cursos</a></span> <span><a href="/blog/" class="btn btn-2 my-4 mx-5">Blog</a></span> <span><a href="/contato/" class="btn btn-2">Entre em contato</a></span>
    </div>
  </div>
</section>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>