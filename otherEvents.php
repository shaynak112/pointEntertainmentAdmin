<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="row">

    <div class="col-lg-10" id='pagesUpdateTemp' style='margin-left:5%;'>

    <h1>Other Events</h1>

    </div>
  </div>

  <div class="row">


    <div class="col-lg-10 col-lg-offset-1" style='margin-left:5%;'>

    <div>Add in any supporting events</div>

<form name="addOtherEvents" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addEventName">Event Name: </label>
      <input class="form-control" id="addEventName" type="text" name="addEventName"/>
      </div>

      <div>
      <label class="control-label" for="addDate">Date (must be in format similar to "2017-08-26 22:00:00": </label>
      <input class="form-control" id="addDate" type="text" name="addDate"/>
      </div>


      <div>
      <label class="control-label" for="addFBlink">Facebook Link: </label>
      <input class="form-control" id="addFBlink" type="text" name="addFBlink"/>
      </div>


      <div>
      <label class="control-label" for="addVenue">Venue: </label>
      <input class="form-control" id="addVenue" type="text" name="addVenue"/>
      </div>


      <div>
      <label class="control-label" for="addCover">Cover: </label>
      <input class="form-control" id="addCover" type="text" name="addCover"/>
      </div>


      <div>
      <label class="control-label" for="addDJs">DJs: </label>
      <input class="form-control" id="addDJs" type="text" name="addDJs"/>
      </div>

      <input class="btn btn-primary" type="submit" value="Add Other Event" name="addOtherEvent" id="addOtherEvent" />


</form>


 <div id="submitOtherEvent">

    <?php

    //on submission of form
    if(isset($_POST["addOtherEvent"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $eventName = $_POST['addEventName'];
        $eventDate = $_POST['addDate'];
        $facebookURL = $_POST['addFBlink'];
        $venue = $_POST['addVenue'];
        $cover = $_POST['addCover'];
        $DJs = $_POST['addDJs'];

        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query1 = "INSERT INTO otherEvents (eventName, date, facebookURL, venue, cover, DJs) VALUES (:eventName, :eventDate, :facebookURL, :venue, :cover, :DJs)";

      $statement1 = $db1->prepare($query1);


      $statement1->bindValue(':eventName', $eventName, PDO::PARAM_STR);
      $statement1->bindValue(':eventDate', $eventDate, PDO::PARAM_STR);
      $statement1->bindValue(':facebookURL', $facebookURL, PDO::PARAM_STR);
      $statement1->bindValue(':venue', $venue, PDO::PARAM_STR);
      $statement1->bindValue(':cover', $cover, PDO::PARAM_STR);
      $statement1->bindValue(':DJs', $DJs, PDO::PARAM_STR);
     

      $statement1->execute();

      echo "{$eventName} has been added, thanks!";

      $conn1=null;
    }
    ?>

  </div>




    </div> <!--end col-lg-10 div -->
  </div><!--end row div-->










</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>