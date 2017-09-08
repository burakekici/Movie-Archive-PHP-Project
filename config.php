<?php
// Create connection to Oracle
$db = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)
(HOST = dbs.cs.hacettepe.edu.tr) (PORT = 1521)) (CONNECT_DATA =(SID = dbs)))";
$username = "C##b21228324";
$pass = "21228324";

$conn = oci_connect($username,$pass,$db);

if (!$conn) {
    $m = oci_error();
    echo $m['message'], "\n";
    exit;
}

// Close the Oracle connection
//oci_close($conn);
?>
