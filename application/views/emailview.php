<html>
    <head>
        <title>Prueba de Mandar un email a Gmail</title>
        <link rel="stylesheet" href="http://localhost/Prueba1/CSS/style.css" type="text/css" media="screen" charset="utf-8" />
    </head>
    <body>
        <div align="center" id="forma">
            <form action="./sendemail" method="post">
                Destinatario:   <input type="text" name="destinatario"  id="destinatario" />
                <br>
                Asunto:                       <input type="text" name="asunto" id="asunto" />
                <br>
                Mensaje:                      <input type="text" name="mensaje" id="mensaje" />
                <br>
                <input type="submit" />
                <?php
                    if($Entro == 1)
                        echo validation_errors();
                ?>
                
            </form>
        </div>
    </body>
</html>
