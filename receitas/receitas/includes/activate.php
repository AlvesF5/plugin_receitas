<?php

function br_activate_plugin(){
    if(version_compare(get_bloginfo('version'), '4.5', '<')){
        wp_die(__('Você precisar atualizar o Wordpress para usar o plugin', 'receitas'));
    }
    
    global $wpdb;
    
    $sql = "CREATE TABLE".$wpdb->prefix."receitas_votos(
        ID BIGINT(20) NOT NULL AUTO_INCREMENT,
        receita_id BIGINT(20) NOT NULL,
        voto TINYINT(1) NOT NULL,
        user_ip VARCHAR(32) NOT NULL,
        PRIMARY KEY(ID) 
        )".$wpdb->get_charset_collate();
        
        require_once(ABSPATH.'/wp-admin/includes/upgrade.php');
        
        dbDelta($sql);
        
        
        
    
    
    
}