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
        <script type="text/javascript">
            function btnDelete(){
                alert('It works!')
            }
        </script>
    </head>
    <body>

        <div id="signup_form">
            <p class="heading">Ator</p>
            <?php echo form_open('ator/submit'); ?>
            <?php // echo form_hidden('id', $a->getId())?>
            <?php echo validation_errors('<p class="error">', '</p>'); ?>
            <p>
                <label for="ator">Nome: </label>
                <?php echo form_input('ator', set_value('ator')); ?>
            </p>
            <p>
                <?php echo form_submit('submit', 'Novo Ator'); ?>
            </p>
            <?php echo form_close(); ?>
        </div>
        
        <div class="listaAtor" style="border-color: #002166">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Ator</th>
                    <th>Delete</th>
                    <th>Edite</th>
                </tr>
                <?php foreach ($a as $value):?>
                <tr>
                    <td><?php echo $value->getId();?></td>
                    <td><?php echo $value->getAtor();?></td>
                    <td><button type="button" id="btnDelete" onclick="btnDelete();">Delete</button></td>
                    <td><button type="button" id="btnEdit" onclick="btnDelete();">Edite</button></td>
                </tr>
                <?php endforeach; ?>
            </table>            
        </div>

        
    </body>
</html>
