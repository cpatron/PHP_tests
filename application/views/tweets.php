<html>
    <head>
        <title>Tweets</title>
    </head>
    <body>
        
        
        
        <?php
        
            //$username = $_GET("uname");
            //$tweeter = $_GET("tweets");
            $username = "joepr25";
            $tweeter = "100";
            
            echo "<p><b><font face=\"verdana\" color=\"green\"> A continuacion se presentan los ultimos ".$tweeter." tweets que realizo el usuario ".$username."</font></b></p>";
            
            $tweetData = file_get_contents("http://twitter.com/status/user_timeline/".$username.".json?count=".$tweeter."");
            $actualPos = 0;
            $target = "\"text\":\"";
            $found = 0;
            $final = 0;
            

            
            $i = 0;
            
            while(TRUE)
            {
                if(strpos($tweetData, $target, $actualPos) == FALSE)
                        break;
                $found = strpos($tweetData, $target, $actualPos);
                $actualPos = $found + 8;
                $final = strpos($tweetData, "\"", $actualPos);
                $tweet = substr($tweetData, $actualPos, ($final - $actualPos));
                print("<p>".$tweet."</p>");
                $i++;
                
            }
        
        ?>
        
    </body>
</html>
