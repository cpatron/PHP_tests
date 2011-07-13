<html>
    <head>
        <title>
            Crud Operations
        </title>
        <style type="text/css" media="screen">
		label {display: block;}
	</style>
    </head>
    <body>
        <h1>Crud Functions</h1>
        
        <h2>Read</h2>
        <?php
            if(isset($records))
            {
                foreach($records as $record)
                {
                    print("<p><h3>");
                    echo anchor("controladorcrud/delete/$record->id", $record->Autor);
                    print("</h3></p>");
                    print("<p>".$record->Texto."</p>");
                }
            }
            else
                echo "<p>There are no records in this database";
        ?>
        <hr />
        <h2>Write</h2>
        <?php echo form_open('controladorcrud/create'); ?>
        
        	<p>
                        <label for="autor">Autor:</label>
                        <input type="text" name="autor" id="autor" />
                </p>

                <p>
                        <label for="texto">Texto:</label>
                        <input type="text" name="texto" id="texto" />
                </p>	

                <p>
                        <input type="submit" value="Submit" />
                </p>
            
        
        <?php echo form_close(); ?>
                
        <hr />
        
        <h2>Delete</h2>
        
        <p>To delete a record simply click the author and you will have deleted the row</p>
        
    </body>
</html>