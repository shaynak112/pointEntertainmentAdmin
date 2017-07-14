<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6 col-leg-offset-3" id='venuePage' style='margin-left:5%;'>




<h1>Guestlists</h1>

</div>
</div>

<div class="row">


<div class="col-lg-6 col-lg-offset-3" style='margin-left:5%;'>



<?php

$dateNow = date("mm/dd/YYYY");

/*get next three events */

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT id,name,date FROM event WHERE id=30 ORDER BY date DESC LIMIT 3";
    #$query = "SELECT id,name,date FROM event WHERE date >= $dateNow  ORDER BY date DESC LIMIT 3";
    $statement = $db->prepare($query);
    $statement->execute();
    $nextEvents = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php
foreach($nextEvents as $p)

echo "<h2>Event: " . $p->name . "</h2>";
echo "<h3>Date: " . $p->date . " and ID " . $p->id . "</h3>";
$nextEventID = $p->id;

    $dbconn1 = new Dbconnect;
    $db1 = $dbconn1->getDb();
    $query1 = "SELECT id, eventID, promoter, guestName, plus FROM guestlist WHERE eventID=$nextEventID ORDER BY guestName ASC";
    $statement1 = $db1->prepare($query1);
    $statement1->execute();
    $oneEvent = $statement1->fetchAll(PDO::FETCH_OBJ);

?>
<table style='width:100%;padding:7px;border-spacing:15px;font-size:1.3em;'>
  <tr>
  <th style='text-align:right;'>Guest</th>
  <th>Plus</th>
  <th>Notes</th>
  <th>Promoter</th>
  </tr>

	<?php
		foreach($oneEvent as $z)
		{
			echo "<tr>";
      echo "<td style='padding:7px;text-align:right;'>" . $z->guestName . "</td>";
      echo "<td style='padding:7px;'>" . " + " . $z->plus . "</td>";
      echo "<td style='padding:7px;width:40%;'>_______________</td>";
      echo "<td style='padding:7px;'>" . $z->promoter . "</td>";
      echo "</tr>";

		}

	?>


</table>

</div><!--end div for partner list col-->
</div><!--end of row for-->



</div><!--end col lg 8 offset 2--><!--end partner Page div-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>