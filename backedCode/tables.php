<?php
require_once("./database.php");
$create="CREATE TABLE RecoverCodes(resetCode Varchar(100) NOT NULL,email  Varchar(100) NOT NULL,Used VARCHAR(100) DEFAULT 'No')";
mysqli_query($db,$create);



?>