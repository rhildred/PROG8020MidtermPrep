<?php 

$oDb = new PDO("sqlite:" . __DIR__ . "/cds.sqlite");

//$sQuery =  "';DROP DATABASE testme;#'";
$sQuery = "pop"; 

if(isset($_GET['Genre']))
{
    $sQuery = $_GET['Genre'];
}

$oDb->prepare("SELECT * FROM `cds` WHERE genre = :genre");
$oDb->bindParam("genre", $sQuery);
$oDb->execute();
$aResults = $oDb->fetchAll(PDO::FETCH_OBJ);

echo json_encode($aResults);


?>
