<html>
	<head>
			<title></title>
	<body>
		<p>Mis tweets</p>
		
	<?php
		
		foreach($records as $tweet) {
			echo "<br>";
		     echo $tweet->text;
		 }
		
	?>
	</body>
</html>