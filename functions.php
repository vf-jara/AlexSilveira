<?php

add_theme_support( 'wp-block-styles' );


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// funções para carregamento dos scripts do bootstrap -> Remove a necessidade de inserção no footer
function skematik_jquery_js(){
  wp_enqueue_script('jquery');
}
function wpt_register_js() {
  wp_register_script(
      'jquery.bootstrap.min', 
      get_template_directory_uri() . '/JS/bootstrap.bundle.min.js', 
      'jquery'
  );
  wp_enqueue_script('jquery.bootstrap.min');
}




/* Load Scripts */
add_action( 'wp_enqueue_scripts', 'skematik_jquery_js' );
add_action( 'wp_enqueue_scripts', 'wpt_register_js' );



//função de resize para o excerpt dos cards de blog
function novo_tamanho_do_resumo($length) {
	return 20;
}

add_filter('excerpt_length', 'novo_tamanho_do_resumo');



//função de otimização da criação de custom fields
function get_field($key, $page_id = 0){
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}
function the_field($key, $page_id = 0){
  echo get_field($key, $page_id);
}

//function para modificação do resumo da Home
add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home(){
  $cmb = new_cmb2_box([
    'id'=>'home_box',
    'title'=>'Home',
    'object_types'=>['page'],
    'show_on'=>[
      'key'=>'page-template',
      'value'=>'page-home.php'
    ],
  ]);

  $cmb->add_field([
    'name'=> 'Resumo da Home',
    'id' => 'resumo',
    'type'=> 'textarea',
  ]);
}

//imagem de capa para os posts do blog
add_action('cmb2_admin_init', 'cmb2_fields_post');
function cmb2_fields_post(){
  $cmb = new_cmb2_box([
    'id'=>'post_box',
    'title'=>'Post',
    'object_types'=>['post'],
    'show_on'=>[
      'key'=>'post-template',
      'value'=>'post-new.php'
    ],
  ]);

  $cmb->add_field([
    'name'=> 'Imagem da postagem',
    'description'=> 'UTILIZAR IMAGENS HORIZONTAIS, FORMATO LANDSCAPE', 
    'id' => 'img_post',
    'type'=> 'file',
    'options' => [
      'url' => false,
    ]
  ]);
  
}

add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre(){
  $cmb = new_cmb2_box([
    'id'=>'sobre_box',
    'title'=>'Sobre',
    'object_types'=>['page'],
    'show_on'=>[
      'key'=>'page-template',
      'value'=>'page-quemSouEu.php'
    ],
  ]);

  $cmb->add_field([
    'name'=> 'Imagem 1',
    'description'=> 'UTILIZAR IMAGENS RETANGULARES 3:4, DE PREFERÊNCIA', 
    'id' => 'img_sobre_1',
    'type'=> 'file',
    'options' => [
      'url' => false,
    ]
  ]);
  $cmb->add_field([
    'name'=> 'Descrição Imagem 1', 
    'id' => 'img_description_1',
    'type'=> 'text',
  ]);
  $cmb->add_field([
    'name'=> 'Imagem 2',
    'description'=> 'UTILIZAR IMAGENS RETANGULARES 3:4, DE PREFERÊNCIA', 
    'id' => 'img_sobre_2',
    'type'=> 'file',
    'options' => [
      'url' => false,
    ]
  ]);
  $cmb->add_field([
    'name'=> 'Descrição Imagem 2', 
    'id' => 'img_description_2',
    'type'=> 'text',
  ]);
}

//adicionar campos para postagem de curso
add_action('cmb2_admin_init', 'cmb2_fields_cursos');
function cmb2_fields_cursos(){
    $cmb = new_cmb2_box([
    'id'=>'box_cursos',
    'title'=>'Cursos',
    'object_types'=>['page'],
    'show_on'=>[
      'key'=>'page-template',
      'value'=>'page-cursos.php'
    ],
  ]);

  $cursos = $cmb->add_field([
    'name'=> 'Box de Cursos',
    'id' => 'curso',
    'type'=> 'group',
    'repeatable' => true,
    'options'=>[
      'group_title' => 'Curso {#}',
      'add_button' => 'Adicionar Novo Curso',
      'remove_button' => 'Remover Curso',
    ],
  ]);
  $cmb->add_group_field($cursos,[
    'name'=> 'Título',
    'id' => 'titulo_curso',
    'type'=> 'text',
  ]);

  $cmb->add_group_field($cursos,[
    'name'=> 'Local',
    'id' => 'local_curso',
    'type'=> 'text',
  ]);

  $cmb->add_group_field($cursos,[
    'name'=> 'Data',
    'id' => 'data_curso',
    'type'=> 'text',
    'description'=>'Preencher da maneira que preferir que apareça no Card'
  ]);
  $cmb->add_group_field($cursos,[
    'name'=> 'Data Inicial',
    'id' => 'data_inicial',
    'type'=> 'text',
    'description'=>'Preencher no formato dd/mm/aaaa para propósitos de ordenação',
  ]);
  $cmb->add_group_field($cursos,[
    'name'=> 'Investimento',
    'id' => 'preco_curso',
    'type'=> 'text',
    'description'=>'Formato XXX,XX sem o símbolo de R$, que é inserido automaticamente'
  ]);
  $cmb->add_group_field($cursos,[
    'name'=> 'Link para a página',
    'id' => 'link_curso',
    'type'=> 'text_url',
  ]);
  $cmb->add_group_field($cursos,[
    'name'=> 'Background do Curso',
    'description'=> 'UTILIZAR IMAGENS HORIZONTAIS, FORMATO LANDSCAPE', 
    'id' => 'bg_curso',
    'type'=> 'file',
    'options' => [
      'url' => false,
    ]
  ]);
  $cmb->add_group_field($cursos,[
    'name'=> 'Curso Realizado?',
    'id' => 'curso_realizado',
    'type'=> 'checkbox',
    'description'=>'marcar para adicionar a label de curso realizado'
  ]);

}

//função para preenchimento de Materiais
add_action('cmb2_admin_init', 'cmb2_fields_materiais');
function cmb2_fields_materiais(){
  $cmb = new_cmb2_box([
    'id'=>'materiais_box',
    'title'=>'Materiais',
    'object_types'=>['page'],
    'show_on'=>[
      'key'=>'page-template',
      'value'=>'page-materiais.php'
    ],
  ]);

  $materiais = $cmb->add_field([
    'name'=> 'Box de Materiais',
    'id' => 'materiais',
    'type'=> 'group',
    'repeatable' => true,
    'options'=>[
      'group_title' => 'Material {#}',
      'add_button' => 'Adicionar Novo Material',
      'remove_button' => 'Remover',
    ],
  ]);
  $cmb->add_group_field($materiais,[
    'name'=> 'Título',
    'id' => 'titulo_material',
    'type'=> 'text',
  ]);

  $cmb->add_group_field($materiais,[
    'name'=> 'Descrição',
    'id' => 'txt_material',
    'type'=> 'textarea',
  ]);
  $cmb->add_group_field($materiais,[
    'name'=> 'Mockup do material',
    'description'=> '', 
    'id' => 'img_material',
    'type'=> 'file',
    'options' => [
      'url' => false,
    ]
  ]);
  $cmb->add_group_field($materiais,[
    'name'=> 'Link para a landingpage',
    'id' => 'link_material',
    'type'=> 'text_url',
  ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_galerias');
function cmb2_fields_galerias(){
    $cmb = new_cmb2_box([
    'id'=>'box_galerias',
    'title'=>'Galerias',
    'object_types'=>['page'],
    'show_on'=>[
      'key'=>'page-template',
      'value'=>'page-galeria.php'
    ],
  ]);

  $galerias = $cmb->add_field([
    'name'=> 'Box de Galerias',
    'id' => 'galeria',
    'type'=> 'group',
    'repeatable' => true,
    'options'=>[
      'group_title' => 'Galeria {#}',
      'add_button' => 'Adicionar Nova Galeria',
      'remove_button' => 'Remover Galeria',
    ],
  ]);

  $cmb->add_group_field($galerias,[
    'name'=> 'Título',
    'id' => 'titulo_galeria',
    'type'=> 'text',
  ]);

  $cmb->add_group_field($galerias,[
    'name'=> 'Link para a galeria',
    'id' => 'link_galeria',
    'type'=> 'text_url',
  ]);

  $cmb->add_group_field($galerias,[
    'name'=> 'Capa da Galeria',
    'description'=> 'UTILIZAR IMAGENS HORIZONTAIS, FORMATO LANDSCAPE', 
    'id' => 'capa_galeria',
    'type'=> 'file',
    'options' => [
      'url' => false,
    ]
  ]);
}
add_action('cmb2_admin_init', 'cmb2_fields_galeria_template');
function cmb2_fields_galeria_template(){
  $cmb = new_cmb2_box([
    'id'=>'galeria_template',
    'title'=>'Galeria-template',
    'object_types'=>['page'],
    'show_on'=>[
      'key'=>'page-template',
      'value'=>'page-galeria-template.php'
    ],
  ]);
  $cmb->add_field([
    'name'=>'Galeria',
    'description'=> 'Inserir aqui as imagens da galeria',
    'id'=>'galeria_file_list',
    'type'=>'file_list',

  ]);
}
function cmb2_output_file_list( $galeria_file_list, $img_size = 'small' ) {

	// acessa a lista de itens
	$files = get_post_meta( get_the_ID(), $galeria_file_list, 1 );

	echo '<div class="file-list-wrap">';
	// Loop e exibe a imagem
	foreach ( (array) $files as $attachment_id => $attachment_url ) {

		echo '<div class="item">';

		echo wp_get_attachment_image( $attachment_id, $img_size,false, $args );
		echo '</div>';
	}

	echo '</div>';
}
?>