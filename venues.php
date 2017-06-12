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




<h1>Venues</h1>

</div>
</div>

<div class="row">


<div class="col-lg-3 col-lg-offset-3" style='margin-left:5%;'>

<h2>Add Venue</h2>

 <form name="addVenueForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addVenueName">Venue Name: </label>
      <input class="form-control" id="addVenueName" type="text" name="addVenueName"/>
      </div>

      <div>
      <label class="control-label" for="addVenueAddress">Venue Address: </label>
      <input class="form-control" id="addVenueAddress" type="text" name="addVenueAddress"/>
      </div>

      <div>
      <label class="control-label" for="addVenueURL">Venue URL: </label>
      <input class="form-control" id="addVenueURL" type="text" name="addVenueURL"/>
      </div>

      <div>
      <label class="control-label" for="addVenueDescription">Venue Description (optional): </label>
      <input class="form-control" id="addVenueDescription" type="text" name="addVenueDescription"/>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Add Venue" name="addVenue" id="addVenue" />

    </form>

  <div id="addVenueSubmitDiv">

    <?php

    //on submission of form
    if(isset($_POST["addVenue"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $venueName = $_POST['addVenueName'];
        $venueAddress = $_POST['addVenueAddress'];
        $venueURL = $_POST['addVenueURL'];
        $venueDescription = $_POST['addVenueDescription'];

        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query1 = "INSERT INTO venues (venueName, venueAddress, venueURL, venueDescription, venueFeatured) VALUES (:venueName, :venueAddress, :venueURL, :venueDescription, '0')";

      $statement1 = $db1->prepare($query1);


      $statement1->bindValue(':venueName', $venueName, PDO::PARAM_STR);
      $statement1->bindValue(':venueAddress', $venueAddress, PDO::PARAM_STR);
      $statement1->bindValue(':venueURL', $venueURL, PDO::PARAM_STR);
      $statement1->bindValue(':venueDescription', $venueDescription, PDO::PARAM_STR);
     

      $statement1->execute();

      echo "{$venueName} has been added to the list of venues.";

      $conn1=null;
    }
    ?>


    <h2>Remove Venue</h2>

    <form name="removeVenueForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeVenueID">Venue ID: </label>
      <input class="form-control" id="removeVenueID" type="text" name="removeVenueID"/>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Remove Venue" name="removeVenue" id="removeVenue" />

    </form>

    <?php

    //on submission of form
    if(isset($_POST["removeVenue"]))
    {
        //database connection
        $conn2 = new Dbconnect;
        $db2 = $conn2->getDb();

        //$val = new Validate();
          
        $venueID2 = $_POST['removeVenueID'];

        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query2 = "DELETE FROM venues WHERE id=$venueID2";

        $statement2 = $db2->prepare($query2);

  
      $statement2->bindValue(':venueID2', $venueID2, PDO::PARAM_INT);
     

      $statement2->execute();

      echo "Removed, thank you.";

     $conn2=null;
    }
    ?>


  </div> <!--end addPartnerSubmitDiv -->


</div><!--end div for add partner col-->


<div class="col-lg-8">

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM venues ORDER BY venueFeatured DESC, venueName ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $venues = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<h2>List of Venues</h2>



<table>
	<tr>
  <th>Name</th>
	<th style='padding-left:2%;'>Address</th>
	<th style='padding-left:2%;'>ID</th>
  <th style='padding-left:5%;'>URL</th>
  <th style='padding-left:7%;'>Featured</th>
  <th style='padding-left:7%;'>Image</th>
	</tr>

	<?php
		foreach($venues as $p)
		{
			echo "<tr>";
      echo "<td>" . $p->venueName . "</td>";
      echo "<td style='padding-left:2%;'>" . $p->venueAddress . "</td>";
      echo "<td style='padding-left:2%;'>" . $p->id . "</td>";
			echo "<td style='padding-left:5%;'><a href='" . $p->venueURL . "' target='_blank'>" . "Link" . "</td>";
      echo "<td style='padding-left:7%;'>" . $p->venueFeatured . "</td>";
      echo "<td style='width:10%;padding-left:7%;'><img src='venueViewerImg.php?id=" . $p->id . "' style='width:100%;'></td>";
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