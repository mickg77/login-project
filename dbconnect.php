<?php
$conn = mysql_connect("localhost","mickg77","");
mysql_select_db("c9");
session_start();

if (false===$conn){
    die("Connection failed");
}

else {
    echo 'Database Connected';
}

?>