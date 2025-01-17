<?php

function br_receitas_init(){
    $labels = array(
        'name' => 'Receitas',
        'singular_name' => 'Receita',
        'menu_name' => 'Receitas',
        'name_admin_bar' => 'Receita',
        'add_new' => 'Adcionar nova',
        'add_new_item' => 'Adicionar nova receita',
        'new_item' => 'Nova receita',
        'edit_item' => 'Editar receita',
        'view_item' => 'Visualizar receita',
        'all_items' => 'Todas as receitas',
        'search_items' => 'Procurar receita',
        'parent_item_colon' => 'Receitas filhas',
        'not_found' => 'Nenhuma receita encontrada',
        'not_found_in_trash' => 'Nenhuma receita no lixo'
        
        
    );
    
    $array = array(
       'labels' => $labels,
       'description' => 'Um tipo de conteúdo para receitas',
       'public' => true,
       'public_queryable' => true,
       'query_var' => true,
       'show_ui' => true,
       'show_in_menu' => true,
       'rewite' => array('slug' => 'receita'),
       'capability_type' => 'post',
       'has_archive' => true,
       'hierarchical' => false,
       'menu_postition' => 5,
       'supports' => array('title', 'editor', 'author', 'thumbnail')
    );
    
    register_post_type('receita', $array);
}