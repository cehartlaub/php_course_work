<html>
    <head> 
       <title>Make Me Elvis - Remove Email</title>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body>
        
  <img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
  <img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
  <p>Please select the email addresses to delete from the email list and click Remove.</p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
    <?php
        $dbc = mysqli_connect('localhost', 'cehartlaub', '123456', 'elvis_store')
          or die('Error connecting to MySQL database');
    
       if (isset($_POST['submit'])) {
        foreach ($_POST['todelete'] as $delete_id) {
            $query = "DELETE FROM email_list WHERE id = $delete_id";
            mysqli_query($dbc, $query)
             or die ('Error querying database.');
        }
           echo 'Customer(s) removed.<br />';
      }
          
        $query = "SELECT * FROM email_list";
        $result = mysqli_query($dbc, $query);
        while ($row = mysqli_fetch_array($result)) {
          echo '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]" />';
          echo $row['first_name'];
          echo ' ' . $row['last_name'];
          echo ' ' . $row['email'];
          echo '<br />';
    }
        
        mysqli_close($dbc);
    ?>
        <input type="submit" name="submit" value="Remove" />
     </form>   
   </body>
</html>