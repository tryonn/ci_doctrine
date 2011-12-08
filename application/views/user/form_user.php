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
        <h1>Simão Menezes</h1>

        <div id="signup_form">
            <p class="heading">User Login</p>
            <?php echo form_open('user/submit'); ?>
            <?php echo validation_errors('<p class="error">', '</p>'); ?>
            <p>
                <label for="username">Username: </label>
                <?php echo form_input('username', set_value('username')); ?>
            </p>
            <p>
                <label for="password">Password: </label>
                <?php echo form_password('password'); ?>
            </p>
            <p>
                <label for="passconf">Confirm Password: </label>
                <?php echo form_password('passconf'); ?>
            </p>
            <p>
                <label for="email">E-mail: </label>
                <?php echo form_input('email'); ?>
            </p>
            <p>
                <?php echo form_submit('submit', 'Create my account'); ?>
            </p>
            <?php echo form_close(); ?>
        </div
    </body>
</html>
