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

        <div id="signup_form">
            <p class="heading">Vendedores</p>
            <?php echo form_open('vendedor/submit'); ?>
            <?php echo validation_errors('<p class="error">', '</p>'); ?>
            <p>
                <label for="nome">Nome: </label>
                <?php echo form_input('nome', set_value('nome')); ?>
            </p>
            <p>
                <label for="email">E-mail: </label>
                <?php echo form_input('email'); ?>
            </p>
            <p>
                <label for="matricula">Matricula: </label>
                <?php echo form_input('matricula'); ?>
            </p>
            <p>
                <?php echo form_submit('submit', 'Novo Vendedor'); ?>
            </p>
            <?php echo form_close(); ?>
        </div
    </body>
</html>
