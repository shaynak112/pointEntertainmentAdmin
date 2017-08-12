<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6 col-lg-offset-3"  style='margin-left:2%;'>


<h1>All Point Events</h1>


</div>
</div>

<div class="row">

<div class="col-lg-12" style='margin-left:2%;'>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM event ORDER BY eventDate DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $events = $statement->fetchAll(PDO::FETCH_OBJ);

?>


<table>
	<tr>
  <th style='width:40%;'>Name</th>
	<th style='padding-left:2%;'>Date</th>
  <th style='padding-left:2%;'>Venue</th>
	<th style='padding-left:2%;'>Facebook</th>
  <th style='padding-left:2%;'>Status</th>
  <th style='padding-left:2%;'>More Info</th>
	</tr>

	<?php
		foreach($events as $p)
		{
			echo "<tr>";
      echo "<td style='width:40%;'>" . $p->name . "</td>";
			echo "<td style='padding-left:2%;'>" . $p->eventDate . "</td>";
      echo "<td style='padding-left:2%;'>" . $p->venue . "</td>";
			echo "<td style='padding-left:2%;'><a href='" . $p->facebookURL . "' target='_blank'>" . "Link" . "</td>";
      echo "<td style='padding-left:2%;'>" . $p->status . "</td>";
       echo "<td  style='padding-left:2%;'><a href='eventDetails.php?id=" . "{$p->id}'>" . "Details" . "</a></td>";
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