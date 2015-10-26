<?php 

$oDb = new PDO("sqlite:" . __DIR__ . "/cds.sqlite");

//$sQuery =  "';DROP DATABASE testme;#'";
$sQuery = "pop"; 

if(isset($_GET['Genre']))
{
    $sQuery = $_GET['Genre'];
}

$oStmt = $oDb->prepare("SELECT * FROM `cds` WHERE genre = '" . $sQuery . "'");

$oStmt->execute();

$aResults = $oStmt->fetchAll(PDO::FETCH_OBJ);

echo json_encode($aResults);


?>
