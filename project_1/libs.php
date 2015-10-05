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
               $libs = "They $verb away $adverb in $adjective $noun.";
               
            if ((empty($noun)) && (empty($verb)) && (empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter any of the forms';
                $output_form = true;
            }
            if ((empty($noun)) && (!empty($verb)) && (!empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter a noun';
                $output_form = true;
            }
            if ((!empty($noun)) && (empty($verb)) && (!empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter a verb';
                $output_form = true;
            }
            if ((!empty($noun)) && (!empty($verb)) && (empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter an adjective';
                $output_form = true;
            }
            if ((!empty($noun)) && (!empty($verb)) && (!empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter an adverb';
                $output_form = true;
            }
            if ((empty($noun)) && (empty($verb)) && (!empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter a noun and verb';
                $output_form = true;
            }
            if ((empty($noun)) && (!empty($verb)) && (empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter a noun and adjective';
                $output_form = true;
            }
            if ((empty($noun)) && (!empty($verb)) && (!empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter a noun and adverb';
                $output_form = true;
            }
            if ((!empty($noun)) && (empty($verb)) && (empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter a verb and adjective';
                $output_form = true;
            }
            if ((!empty($noun)) && (empty($verb)) && (!empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter a verb and adverb';
                $output_form = true;
            }
            if ((!empty($noun)) && (!empty($verb)) && (empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter a adjective and adverb';
                $output_form = true;
            }
            if ((empty($noun)) && (empty($verb)) && (empty($adjective)) && (!empty($adverb))) {
                echo 'You forgot to enter a noun, verb and adjective';
                $output_form = true;
            }
            if ((empty($noun)) && (!empty($verb)) && (empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter a noun, adjective and adverb';
                $output_form = true;
            }
            if ((empty($noun)) && (!empty($verb)) && (empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter a noun, adjective and adverb';
                $output_form = true;
            }
            if ((empty(!$noun)) && (empty($verb)) && (empty($adjective)) && (empty($adverb))) {
                echo 'You forgot to enter a verb, adjective and adverb';
                $output_form = true;
            }
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
                
                echo '<br />' . $libs;
            }
           
            
            
            
             
            if ($output_form) { 
        ?>
            <table>
                <tbody>
                    
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                 <tr>
                 <td><label for="noun">Noun:</label></td>
                 <td><input type="text" id="noun" name="noun" value="<?php echo $noun; ?>" /><br /></td>
                 </tr>
                 <tr>
                 <td><label for="verb">Verb:</label></td>
                 <td><input type="text" id="verb" name="verb" value="<?php echo $verb; ?>" /><br /></td>
                 </tr>
                 <tr>
                 <td><label for="adjective">Adjective:</label></td>
                 <td><input type="text" id="adjective" name="adjective" value="<?php echo $adjective; ?>" /><br /></td>
                 </tr>
                 <tr>
                 <td><label for="adverb">Adverb:</label></td>
                 <td><input type="text" id="adverb" name="adverb" value="<?php echo $adverb; ?>" /><br /></td>
                 </tr>
                 <tr>
                 <td id="submitBtn" colspan="2"><input type="submit" value="submit" name="submit" /></td>
                 </tr>
              </form>
              </tbody>
            </table>
        <?php
            }
        ?>
       
             
        
        
        
    </body>
</html>