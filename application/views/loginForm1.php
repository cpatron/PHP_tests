<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="<?php echo base_url();?>/CSS/style2.css" type="text/css" media="screen" />

    </head>
    <body>

        <div id="loginForm">
        <h2>Login</h2>

        <?php
        
            echo form_open('login/validateCredentials');
            echo form_input('username', 'Username');
            echo form_password('password', 'Password');
            echo form_submit('submit', 'Login');
            echo form_close();
            echo anchor('login/createAccount', 'Create Acount');
            
        ?>
        </div>
    </body>
</html>
