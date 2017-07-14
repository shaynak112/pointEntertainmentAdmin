<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <div class="content-wrapper">

<div class="row">

<div class="col-lg-8 col-lg-offset-2" id='eventDescriptionPage' style='margin-left:5%;'>


<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $id = $_GET['id'];
    $query = 'SELECT * FROM event WHERE id = ' . $id;
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $singleEvent = $statement->fetch();

?>


<h1> <?php echo $singleEvent['name']; ?> </h1>

<div><strong>Date: </strong> <?php echo $singleEvent['date']; ?> </div>
<div><strong>Venue: </strong> <?php echo $singleEvent['venue']; ?> </div>
<div><strong>Status: </strong> <?php echo $singleEvent['status']; ?> </div>
<div><strong>Guestlist: </strong> <?php echo $singleEvent['guestlist']; ?> </div>
<div><strong>ID: </strong> <?php echo $singleEvent['id']; ?> </div>
<div><strong>Image Shape: </strong> <?php echo $singleEvent['imgShape']; ?> </div>
<div><strong>Cover: </strong> <?php echo $singleEvent['cover']; ?> </div>

<br/>


<div>
<?php
	echo "<a target='_blank' href=" . $singleEvent['facebookURL'] . ">" . "Facebook Link: " . $singleEvent['facebookURL'] . "</a>";
?>
</div>

<div>
<?php
	echo "<a target='_blank' href=" . $singleEvent['ticketsURL'] . ">" . "Ticket URL: " . $singleEvent['ticketsURL'] . "</a>";
?>
</div>

<h3>Description</h3>
<div> <?php echo $singleEvent['description']; ?> </div>

<h3>Image</h3>

<?php echo "<img src='eventViewerImg.php?id=" . $singleEvent['id'] . "' style='width:50%;display:inline-block;'>"; ?>

<br/>

<h3>Guestlist</h3>

<?php

    /*$dbconn2 = new Dbconnect;
    $db2 = $dbconn2->getDb();
    $query2 = 'SELECT list FROM guestlist WHERE eventID = ' . $id;
    $statement2 = $db2->prepare($query2);
    $statement2->execute();
    $guestlist = $statement2->fetchAll(PDO::FETCH_OBJ);

    $row=$statement2->fetch_assoc();

    var_dump($guestlist);

    $glExplode = explode(" ", $guestlist[0]);
    echo $glExplode[0];*/


   /* $dbconn2 = new Dbconnect;
    $db2 = $dbconn2->getDb();
    $query2 = 'SELECT list FROM guestlist WHERE eventID = ' . $id;
    $result = mysqli_query($query2);
    
    if (!$result)
    {
    	echo "no guestlist yet";
    }
    $row = mysqli_fetch_row($result);

    echo $row[0];
    echo "<br/>";
    echo $row[1];*/


?>

<p>will list guestlist here</p>

<table>

	<tr>
		<th>Name</th>
		<th>Guests</th>
		<th>Email</th>
	</tr>


</table>



</div><!--first col-lg eventDescriptionPage-->
</div><!--row-->
</div><!--end content-wrapper-->



<?php

include 'footer.php';

?>
