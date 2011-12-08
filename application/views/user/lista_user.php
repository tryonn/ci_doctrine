<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/global0.css" type="text/css" media="all">
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>                
            </tr>
            <?php foreach ($user as $value):?>
            <tr>
                <td><?php echo $value->getUsername();?></td>
                <td><?php echo $value->getEmail();?></td>
                <td><?php echo $value->getPassword();?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
