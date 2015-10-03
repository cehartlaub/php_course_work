<html>
    <head>
       <title>Madlibs</title>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body>
        <h3>Crazylibs!</h3> 
        <p>Directions:</p> 
        <p>Enter fields below and submit for a funny short story</p>
        
        <?php 
            if(isset($_POST['submit'])){
               $noun = $_POST['noun'];
               $verb = $_POST['verb'];
               $adjective = $_POST['adjective'];
               $adverb = $_POST['adverb'];
               $output_form = false;
            }
            
            
            
             
            if($output_form){ 
        ?>
              <form action: method"post">
                 <label for="noun">Noun:</label>
                 <input type="text" id="noun" name="noun" /><br />
                 <label for="verb">Verb:</label>
                 <input type="text" id="verb" name="verb" /><br />
                 <label for="adjective">Adjective:</label>
                 <input type="text" id="adjective" name="adjective" /><br />
                 <label for="adverb">Adverb:</label>
                 <input type="text" id="adverb" name="adverb" /><br />
                 <input type="submit" value="submit" name="submit" />
              </form>
        <?php
            }
        ?>
       
             
        
        
        
    </body>
</html>