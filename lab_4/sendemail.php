<html>
    <head> 
       <title>Make Me Elvis - Send Email</title>
       <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body>
        <?php
          
          
          $from = 'elmer@makemeelvis.com';
          $subject = $_POST['subject'];
          $text = $_POST['elvismail'];
          
          
       if((!empty($text)) && (!empty($text))){
           
               
       
          $dbc = mysqli_connect('localhost', 'cehartlaub', '123456', 'elvis_store')
          or die('Error connecting to MySQL server');
          
          
          $query = "SELECT * FROM email_list";
          $result = mysqli_query($dbc, $query)
          or die('Error querying database');
          
        
          while($row = mysqli_fetch_array($result)) {
              $first_name = $row['first_name'];
              $last_name = $row['last_name'];
              $to = $row['email'];
              $msg = "Dear $first_name $last_name, \n $text";
              mail($to, $subject, $msg, 'From:' . $from);
              echo 'Email sent to: ' . $to . '<br />';
          
          
          
          mysqli_close($dbc);
          }
          
        }
        if (empty($subject) && empty($text)) {
          echo 'You forgot the email subject and body text.<br />';
        }
        if (empty($subject) && (!empty($text))) {
          echo 'You forgot the email subject.<br />';
        }
        if (!empty($subject) && (empty($text))) {
          echo 'You forgot the email body text.<br />';
        }
        if((!empty($subject)) && (!empty($text))) {
          //Everything is fine send the email
        }
        
          ?>
    </body>
</html>