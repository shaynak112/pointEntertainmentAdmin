<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6 col-lg-offset-3" id='eventAddPage' style='margin-left:5%;'>




<h1>Add An Event</h1>

</div>
</div>

<div class="row">


<div class="col-lg-3 col-leg-offset-3" style='margin-left:5%;'>

<h2>Add Event</h2>

 <form name="addPartnerForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="eventName">Event Name: </label>
      <input class="form-control" id="eventName" type="text" name="eventName"/>
      </div>

      <div>
      <label class="control-label" for="eventDate">Event Date: </label>
      <input class="form-control" id="eventDate" type="text" name="eventDate"/>
      </div>

      <div>
      <label class="control-label" for="eventFacebook">Facebook URL: </label>
      <input class="form-control" id="eventFacebook" type="text" name="eventFacebook"/>
      </div>

      <div>
      <label class="control-label" for="eventTickets">Tickets URL: </label>
      <input class="form-control" id="eventTickets" type="text" name="eventTickets"/>
      </div>

      <div>
      <label class="control-label" for="eventVenue">Venue: </label>
      <input class="form-control" id="eventVenue" type="text" name="eventVenue"/>
      </div>

      <div class="form-group">
      <label for="eventDescription">Description: </label>
      <textarea class="form-control" rows="5" id="eventDescription" name="eventDescription"></textarea>
      </div>

      <div class="form-group">
      <label for="eventCover">Cover: </label>
      <textarea class="form-control" rows="5" id="eventCover" name="eventCover"></textarea>
      </div>

      <div>
      <label class="control-label" for="eventGuestlist">Guestlist (1 is yes, 0 is no): </label>
      <input class="form-control" id="eventGuestlist" type="text" name="eventGuestlist"/>
      </div>

      <label>Status</label>
      <div class="radio">
      <label><input type="radio" name="draft">Save As Draft</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="future">Publish</label>
      </div>

      <div>
      <label class="control-label" for="eventImage">Image: </label>
      <input class="form-control" type="file" name="eventImage" id="eventImage" />
      </div>



      <br/>

      <input class="btn btn-primary" type="submit" value="Add Event" name="addEvent" id="addEvent" />

    </form>

  <div id="addEventSubmitDiv">

    <?php

    //on submission of form
    if(isset($_POST["addEvent"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $eventName = $_POST['eventName'];
        $eventDate = $_POST['eventDate'];
        $eventFacebook = $_POST['eventFacebook'];
        $eventTickets = $_POST['eventTickets'];
        $eventVenue = $_POST['eventVenue'];
        $eventDescription = $_POST['eventDescription'];
        $eventCover = $_POST['eventCover'];
        $eventGuestlist = $_POST['eventGuestlist'];
        $eventStatus = $_POST['radio'];
  
        $type = pathinfo($_FILES["eventImage"]["tmp_name"],PATHINFO_EXTENSION);
        $image = file_get_contents($_FILES["eventImage"]["tmp_name"]);

        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query1 = "INSERT INTO event (name, date, facebookURL, ticketsURL, venue, description, cover, guestlist, status, image, type) VALUES (:eventName, :eventDate, :eventFacebook, :eventTickets, :eventVenue, :eventDescription, :eventGuestlist, :eventStatus, :image, :type)";

      $statement1 = $db1->prepare($query1);

   

      $statement1->bindValue(':eventName', $eventName, PDO::PARAM_STR);
      $statement1->bindValue(':eventDate', $eventDate, PDO::PARAM_STR);
      $statement1->bindValue(':eventFacebook', $eventFacebook, PDO::PARAM_STR);
      $statement1->bindValue(':eventTickets', $eventTickets, PDO::PARAM_STR);
      $statement1->bindValue(':eventVenue', $eventVenue, PDO::PARAM_STR);
      $statement1->bindValue(':eventDescription', $eventDescription, PDO::PARAM_STR);
      $statement1->bindValue(':eventStatus', $eventStatus, PDO::PARAM_STR);
      $statement1->bindValue(':eventGuestlist', $eventGuestlist, PDO::PARAM_INT);
     
      $statement1->bindValue(':type', $type, PDO::PARAM_LOB);
      $statement1->bindValue(':image', $image, PDO::PARAM_LOB);

      $statement1->execute();

      echo "Event Added.";

      $conn1=null;
    }
    ?>



  </div> <!--end addPartnerSubmitDiv -->


</div><!--end div for add partner col-->


<div class="col-lg-6" style='margin-left:5%;'>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM event WHERE status='future' ORDER BY date DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $partners = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<h2>Upcoming Events (Posted)</h2>



<table>
	<tr>
  <th>Date</th>
	<th style='padding-left:3%;'>Name</th>
	<th style='padding-left:3%;'>URL</th>
  <th style='padding-left:3%;'>Venue</th>
  <th style='padding-left:3%;'>More Info</th>
	</tr>

	<?php
		foreach($partners as $p)
		{
			echo "<tr>";
      echo "<td>" . $p->date . "</td>";
			echo "<td style='padding-left:3%;'>" . $p->name . "</td>";
			echo "<td style='padding-left:3%;'><a href='" . $p->facebookURL . "' target='_blank'>" . "Link" . "</td>";
      echo "<td style='padding-left:3%;'>" . $p->venue . "</td>";
       echo "<td  style='padding-left:3%;'><a href='eventDetails.php?id=" . "{$p->id}'>" . "Details" . "</a></td>";
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