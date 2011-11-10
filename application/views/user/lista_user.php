<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/global.css" type="text/css" media="all">
    </head>
    <body>
        <h1 style="color: red">Simao</h1> 
        
        
        
        <?php
        
            $user = User::get_instance();
            
            $user->get_lista_user();
            
            var_dump($user);

        
        ?>
        
        
    </body>
</html>
