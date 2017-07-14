<?php
require_once('dbConnect.php');

	$conn = new Dbconnect;
    $db = $conn->getDb();

//if venueID is 0, quit program
$venueID = (int) isset($_GET['id']) ? $_GET['id'] : 0;
if ($id === 0)
{
	die("Invalid content id");
}

//DB query
$query = 'SELECT image, type FROM venues WHERE id = ' . $venueID;

$statement = $db->prepare($query);
$statement->execute();
$images = $statement->fetchAll(PDO::FETCH_OBJ);

//for each image, use the image and type to make the BLOB viewable
if (count($images) > 0)
{
 	$venueImage = $images[0];
	
	header("Content-type: image/type");
	echo $venueImage->image;
	exit(0);
}

?>