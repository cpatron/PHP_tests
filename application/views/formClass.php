<html>
    <head>
        <title>
            My first php program
        </title>
    </head>
    <body>
        
        <p>
            <font face="Verdana" color="Green" size="3">Introduce cual es el nombre de la persona de la cual quieres obtener los ultimos tweets.</font>
        </p>
        
        <form action="index.php/tweetscontroller" method="get">
        User Name: <input type="text" name="uname" /> 
        <br>
        Numero de Tweets: <input type="text" name="tweets" />
        <br>
        <input type="submit" />
        </form>
        


    </body>
</html>
