<html>
    <head>
       <link rel="stylesheet" href="<?php echo base_url();?>/CSS/style2.css" type="text/css" media="screen" />

    </head>
    <body>
        <h1>Create an Account!</h1>
        <fieldset>
        <legend>Personal Information</legend>
        <?php

        echo form_open('login/create_member');

        echo form_input('Nombre', set_value('Nombre', 'First Name'));
        echo form_input('email', set_value('email', 'Email Address'));
        ?>
        </fieldset>

        <fieldset>
        <legend>Login Info</legend>
        <?php
        echo form_input('username', set_value('username', 'Username'));
        echo form_input('password', set_value('password', 'Password'));
        echo form_input('password2', 'Password Confirm');

        echo form_submit('submit', 'Create Acccount');
        echo form_close();
        ?>

        <?php echo validation_errors('<p class="error">'); ?>
        </fieldset>
    </body>
</html>