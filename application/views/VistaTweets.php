<html>
	<head>
			<title></title>
	<body>
		<p>
                    <?php
                        print("Estos son los ultimos ".$number." del usuario ".$username."");
                    ?>
                </p>
		
	<?php
		
                print("<font face=\"LucidaSans\" color=\"blue\">");
		foreach($records as $tweet) {
                    
                    print("<p>".$tweet->text."</p>");

		 }
                 print("</font>")
		
	?>
	</body>
</html>