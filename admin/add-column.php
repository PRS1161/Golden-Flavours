<?php
$dbname = "at_expense";
$connection = new mysqli("localhost", "root", "", "$dbname");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$connection->set_charset('utf8');



$sql = $connection->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='$dbname'");

while ($row = $sql->fetch_array()) {

    
   $query_foraddcolumn = "ALTER TABLE {$row['TABLE_NAME']}
                        ADD COLUMN login_id int(11) NULL,
                        ADD COLUMN firm_id int(11)  NULL,
                        ADD COLUMN cr_year int(11)  NULL;";
    $connection->query($query_foraddcolumn);
    

}
echo "Done";
