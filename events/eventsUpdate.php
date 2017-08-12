<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6 col-leg-offset-3" id='eventUpdatePage' style='margin-left:5%;'>




<h1>Update Event</h1>

</div>
</div>

<div class="row">


<div class="col-lg-3 col-leg-offset-3" style='margin-left:5%;'>

<h2>Publish Event</h2>

 <form name="publishEventForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="eventID">Event ID: </label>
      <input class="form-control" id="eventID" type="text" name="eventID"/>
      </div>

      <label>Status</label>
      <div class="radio">
      <label><input type="radio" name='updateFuture' value="future">Publish</label>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Publish Event" name="publishEvent" id="publishEvent" />

    </form>

  <div id="publishEventSubmitDiv">

    <?php

    //on submission of form
    if(isset($_POST["publishEvent"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $eventID = $_POST['eventID'];
        $eventStatus = $_POST['updateFuture'];


        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query1 = "UPDATE event SET status='future' WHERE id=$eventID";

      $statement1 = $db1->prepare($query1);

      $statement1->bindValue(':eventStatus', $eventStatus, PDO::PARAM_STR);
      $statement1->bindValue(':eventID', $eventID, PDO::PARAM_INT);
     
      $statement1->execute();

      echo "Event Published.";

      $conn1=null;
    }
    ?>



  </div> <!--end addPartnerSubmitDiv -->


</div><!--end div for add partner col-->


<div class="col-lg-6" style='margin-left:5%;'>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM event WHERE status='draft' ORDER BY name ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $events = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<h2>Upcoming Events (Drafts)</h2>



<table>
	<tr>
  <th>ID</th>
  <th>Date</th>
	<th>Name</th>
	<th>URL</th>
  <th>Venue</th>
	</tr>

	<?php
		foreach($events as $p)
		{
			echo "<tr>";
      echo "<td>" . $p->id . "</td>";
      echo "<td>" . $p->eventDate . "</td>";
			echo "<td>" . $p->name . "</td>";
			echo "<td><a href='" . $p->facebookURL . "' target='_blank'>" . $p->facebookURL . "</td>";
      echo "<td>" . $p->venue . "</td>";
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