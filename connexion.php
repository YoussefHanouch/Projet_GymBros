<?php
 $dbhost='localhost';
$dbname='fitness';
$dbuser='root';
$dbpass='2125';

$dsn="mysql:host=".$dbhost.";dbname=".$dbname;
try
{
 $con=new pdo($dsn,$dbuser,$dbpass); 

}
catch (Exception $ex)
{
die('connection echouee'.$ex->getMessage()) ;
}
//echo"connexion reussi";






?>