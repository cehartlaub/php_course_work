<html>
    <head></head>
<body>
    <?php>
    $dbc - mysqli_connect('localhost', 'cehartlaub', '123456','elvis_store')
    or die('Error connecting to MySQL sever.');
    
    $first_name = $POST['firstname'];
    $last_name = $POST['lastname'];
    $email = $POST['email'];
    
    $query = "INSTER INTO email_list(first_name, last_name, email)" .
     "Values ('$first_name', '$last_name', '$email')";
     
     mysqli_query($dbc, $query)
     or die('Error querying database.');
     
     echo 'Customer added.';
     
     mysqli_close($dbc)
    <?>
</body>


</html>