<?php error_reporting(E_ALL ^ E_NOTICE);

    mysql_connect ("localhost", "root", "") or die (mysql_error());
    mysql_select_db ("dbimage");
    
    $id = addslashes ($_REQUEST['id']);
    
    $image = mysql_query ("SELECT * FROM store WHERE id=$id");
    $image = mysql_fetch_assoc($image);
    $image = $image['image'];
    
    header ("Content-type: image/jpeg");
    
    echo $image;
?> 
