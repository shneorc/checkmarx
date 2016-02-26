<?php

if(get_magic_quotes_gpc()) {
   $username = stripslashes($_GET['username']);
   $password = stripslashes($_GET['password']);
}

$link = @mysql_connect('localhost', '', '') 
    or die('Could not connect: ' . mysql_error());

mysql_select_db('injectiontest', $link) 
    or die('Could not select database.');


$query = mysql_query("SELECT * FROM `users` "
        . "WHERE `username` = '$username' "
        . "AND `password` = '$password'");
$row = mysql_fetch_assoc($query);

if(mysql_num_rows($query) == 1) {
    echo "Hello {$row['username']}!<br />";
    echo "Your creditcard number is: {$row['creditcard']}";
}

?>
