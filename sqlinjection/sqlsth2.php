<?php 

$oDb = new PDO("sqlite:" . __DIR__ . "/cds.sqlite");

//$sQuery =  "';DROP DATABASE testme;#'";
$sQuery = "pop"; 

if(isset($_GET['Genre']))
{
    $sQuery = $_GET['Genre'];
}

$aResults = $oDb->prepare("SELECT * FROM `cds` WHERE genre = :genre")->bindParam("genre", $sQuery)->execute()->fetchAll(PDO::FETCH_OBJ);

echo json_encode($aResults);


?>
