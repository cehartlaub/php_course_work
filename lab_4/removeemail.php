<html>
    <head> 
       <title>Make Me Elvis - Remove Email</title>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body>
        <?php
        $dbc = mysqli_connect('localhost', 'cehartlaub', '123456', 'elvis_store')
        or die('Error connecting to MySQL database');
        
        $email = $_POST['email'];
        
        $query = "DELETE FROM email_list WHERE email = '$email'";
        
        mysqli_query($dbc, $query)
        or die('Error querying database');
        
        echo 'Customer removed:' . $email;
        
        mysqli_close($dbc);
        ?>
    </body>
</html>