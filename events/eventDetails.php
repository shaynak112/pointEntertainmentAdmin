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

<div><strong>Date: </strong> <?php echo $singleEvent['eventDate']; ?> </div>
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

<?php echo "<img src='eventPicViewerImg.php?id=" . $singleEvent['id'] . "' style='width:50%;display:inline-block;'>"; ?>



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

<?php
    $dbconn1 = new Dbconnect;
    $db1 = $dbconn1->getDb();
    $eventIDGL = $_GET['id'];
    $query1 = "SELECT id, eventID, promoter, guestName, plus FROM guestlist WHERE eventID=$eventIDGL ORDER BY guestName ASC";
    $statement1 = $db1->prepare($query1);
    $statement1->execute();
    $thisEvent = $statement1->fetchAll(PDO::FETCH_OBJ);

    ?>

<div id='GLTableDiv' style='width:30%;margin-left:10%;'>

<table style='width:100%;padding:3px;border-spacing:10px;'>

	<tr style='text-align:right;'>
		<th style='text-align:right;padding-right:3%;'>Name</th>
		<th>Guests</th>
		<th>Promoter</th>
	</tr>

    <?php
        foreach($thisEvent as $z)
        {
            echo "<tr style='border-bottom:2px solid black;'>";
            echo "<td style='padding:3px;padding-right:3%;text-align:right;'>" . $z->guestName . "</td>";
            echo "<td style='padding:3px;'>" . " + " . $z->plus . "</td>";
            echo "<td style='padding:3px;'>" . $z->promoter . "</td>";
            echo "</tr>";
        }

    ?>


</table>


</div><!--end of table div-->

</div><!--first col-lg eventDescriptionPage-->
</div><!--row-->
</div><!--end content-wrapper-->



<?php

include 'footer.php';

?>