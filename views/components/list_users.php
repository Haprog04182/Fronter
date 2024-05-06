<?php 
    $user_block = new Fronter("div", ""); 
    foreach($users->all() as $user){
        $name = new Fronter("h4", $user['login'], []);

        $user_block->add_innerHTML($name->get_elem());
    }
    
    $user_block->render();
?>