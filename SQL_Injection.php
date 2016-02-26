 if (!$db){
                                    
                                    die("
<font color='#F62817'>
    <b>Error: Could not connect to database - ".mysql_error()."</b>
</font>
<p>\n");
                                    include("admin_loginform.php");
                                    mysql_close($db);
                                    
                                } //end of if
                                else {
                                    
                                    //Leaving $admin and $password open to SQL injection for demonstration purposes
                                    
                                    $query="SELECT *
                                        FROM admins
                                        WHERE username='$admin' AND password='$password'";
                                    $execute=mysql_query($query,$db);
                                    if (mysql_num_rows($execute) == NULL){
                                        
                                        echo "
    <font color='#F62817'>
        <b>Error: Invalid username or password.</b>
    </font>
    <p>\n";
                                        include("admin_loginform.php");
                                        mysql_close($db);
                                        
                                    } //end of if
                                    else {
                                        
                                        echo "
        <font color='#5EFB6E'>
            <b>Welcome to administration, $admin.
            </font>
        </b>
        <br>\n";
                                        echo "What do you want to do?
            <br>\n";
