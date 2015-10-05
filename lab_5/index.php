<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - High Scores</h2>
  <p>Welcome, Guitar Warrior, do you have what it takes to crack the high score list? If so, just <a href="addscore.php">add your own score</a>.</p>
  <hr />

<?php
  define('GW_UPLOADPATH', 'images/');
  // Connect to the database 
  $dbc = mysqli_connect('localhost', 'cehartlaub', '123456', 'gwdb');

  // Retrieve the score data from MySQL
  $query = "SELECT * FROM guitarwars";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of score data, formatting it as HTML 
  echo '<table>';
  while ($row = mysqli_fetch_array($data)) { 
    $target = GW_UPLOADPATH . $screenshot;
    // Display the score data
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $row['score'] . '</span><br />';
    echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
    echo '<strong>Date:</strong> ' . $row['date'] . '</td></tr>';
    if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {
      echo '<img src="' . GW_UPLOADPATH . $screenshot . '" alt="Score image" /></p>';
    }
    else {
      echo '<td><img src="unverified.gif" alt="unverified score" /></td></tr>';
    }
  }
  
  echo '</table>';

  mysqli_close($dbc);
?>

</body> 
</html>
