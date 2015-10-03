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
            if (isset($_POST['submit'])) {
               $noun = $_POST['noun'];
               $verb = $_POST['verb'];
               $adjective = $_POST['adjective'];
               $adverb = $_POST['adverb'];
               $output_form = false;
               $libs = "They $verb away $adverb in a $adjective $noun.";
            }
            else {
                $output_form = true;
            }
            
            if ((!empty($noun)) && (!empty($verb)) && (!empty($adjective)) && (!empty($adverb))) {
                $dbc = mysqli_connect('localhost', 'cehartlaub', '123456', 'project_1')
                 or die ('Error connecting to mysql server');
            
          
                $query = "INSERT INTO madlibs (Noun, Verb, Adjective, Adverb, Story)" . 
                "VALUES ('$noun', '$verb', '$adjective', '$adverb', '$libs')";
          
                mysqli_query($dbc, $query)
                 or die('Error querying database');
           
         
                mysqli_close($dbc);
                
                echo $libs;
            }
            
            
            
             
            if ($output_form) { 
        ?>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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