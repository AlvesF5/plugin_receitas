<?php

function br_receita_opcoes($post){
   $receita_data = get_post_meta($post->ID, 'receita_data',true);
   
   if(empty($receita_data)){
       $receita_data = array(
        'ingredientes' => '',
        'utensilios' => '',
        'dificuldade' => '0',
        'ingredientes' => '',
        'tipo' => ''
        
       );
   }
   
?>   
     <div id="teste">
        Olá mundo!
     </div>
     
     <label>Ingredientes:</label>
     <input type="text" name="br_ingredientes" value="<?php echo $receita_data['ingredientes']; ?>"><br><br>
     
     <label>Tempo de receita:</label>
     <input type="text" name="br_tempo" value="<?php echo $receita_data['tempo']; ?>"><br><br>
     
     <label>Utensilios:</label>
     <input type="text" name="br_utensilios" value="<?php echo $receita_data['utensilios']; ?>"><br><br>
     
     <label>Nível de dificuldade:</label>
     
     <select name="br_dificuldade">
         <option value="0" <?php echo ($receita_data['dificuldade']=='0')?'selected="selected"':''; ?>>Iniciante</option>
         <option value="0" <?php echo ($receita_data['dificuldade']=='1')?'selected="selected"':''; ?>>Intermediário</option>
         <option value="0" <?php echo ($receita_data['dificuldade']=='2')?'selected="selected"':''; ?>>Avançado</option>
         
      
     </select>
     <br><br>
     
     <label>Tipo da receita:</label>
     <input type="text" name="br_tipo" value="<?php echo $receita_data['tempo']; ?>"><br><br>
     
     
     
     
     
     
  
    
    <?php
}

