<?php
require_once('dbConnect.php');

	$conn = new Dbconnect;
    $db = $conn->getDb();

//if contentID is 0, quit program
$contentID = (int) isset($_GET['id']) ? $_GET['id'] : 0;
if ($contentID === 0)
{
	die("Invalid content id");
}

//DB query
$query = 'SELECT image, type FROM event WHERE id = ' . $contentID;

$statement = $db->prepare($query);
$statement->execute();
$images = $statement->fetchAll(PDO::FETCH_OBJ);

//for each image, use the image and type to make the BLOB viewable
if (count($images) > 0)
{
 	$contentImage = $images[0];
	
	header("Content-type: image/type");
	echo $contentImage->image;
	exit(0);
}

?>