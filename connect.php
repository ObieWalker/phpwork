<?php


$user = 'root';
$pass = '';
$db = 'testing1';

$db = new mysqli('localhost', $user, $pass, $db) or die("can't connect");


print "It works";


// connects to database
   $conn = mysqli_connect('localhost', 'root', '', 'testing1');

   // checks for successful connection or kills it
   if (! $conn) {
       die('Error Connecting to Database');
   }

   // Queries the database
   $result = mysqli_query($conn, "select * from workers");

   // checks for results
   if ($result) {
       
       echo '<table><tr><th>S/N</th><th>Name</th><th>Email</th</tr>';
       while ($row = mysqli_fetch_assoc($result)) {
           echo '<tr><td>' . $row['ID'] . '</td>';
           echo '<td>' . $row['Name'] . '</td>';
           echo '<td>' . $row['Email'] . '</td>';
           echo '<td>' . $row['Number'] . '</td></tr>';
       }
       echo '</table>';
   }

?>