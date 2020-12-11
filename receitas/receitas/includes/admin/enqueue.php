<?php

function br_admin_enqueue() {
    global $typenow;
    
    if($typenow != 'receita') {
        return;
    }
    
    //Registros do CSS
    wp_register_style(
        'br_style',
        plugins_url('/assets/css/estilo.css', RECEITA_PLUGIN_URL)
    );
    
    //Uso do CSS
    wp_enqueue_style('br_style');
}