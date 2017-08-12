<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="row">

    <div class="col-lg-10" style='margin-left:5%;'>

    <h1>Previous Events</h1>

    </div>
  </div>

  <div class="row">


    <div class="col-lg-12">

    <h2>Choose Previous Events</h2>

    <div>Make sure a multiple of 3 is selected; 12 seems to be a decent number of events to preview but any multiple of three works!</div>

<h3>Current Previous Events Featured</h3>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM event WHERE showOnPrevious='yes'";
    $statement = $db->prepare($query);
    $statement->execute();
    $showPrevious = $statement->fetchAll(PDO::FETCH_OBJ);

foreach($showPrevious as $p)
{

  echo "<div class='col-lg-4' style='margin-top:20px;'>";
  echo "<a target='_blank' href='" . $p->facebookURL . "'> <img style='width:80%;margin-left:5%;' src='eventPicViewerImg.php?id=" . $p->id . "'></a>";
  //echo "<img src='eventPicViewerImg.php?id=" . $p->id . "'>";
  echo "<br/><div>Event ID: " . $p->id . " --- " . $p->name . "<br/>Date: " . $p->eventDate . "</div>";
  echo "</div>";

}


  ?>

    </div> <!--end col-lg-12 div -->
  </div><!--end row div-->


<div class='row'>

<div class='col-lg-5 col-lg-offset-1'>

<h3>Add To Featured</h3>

<form>

      <div>
      <label class="control-label" for="IDtoAdd">ID To Add: </label>
      <input class="form-control" id="IDtoAdd" type="text" name="IDtoAdd"/>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Add To Featured" name="addToFeaturedPrevious" id="addToFeaturedPrevious" />


</form>


  <?php

    //on submission of form
    if(isset($_POST["addToFeaturedPrevious"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

          
        $IDtoAdd = $_POST['IDtoAdd'];
    
    //database query
      
      $query1 = "UPDATE event SET showOnPrevious='yes' WHERE id=$IDtoAdd";
      $statement1 = $db1->prepare($query1);
      $statement1->bindValue(':IDtoAdd', $IDtoAdd, PDO::PARAM_INT);
      $statement1->execute();

      echo "Event with ID {$IDtoAdd} has been added to the list of featured previous events.";

      $conn1=null;
    }
    ?>


</div><!--end class col-lg-5 -->


<div class='col-lg-5'>

<h3>Remove From Featured</h3>

<form>

      <div>
      <label class="control-label" for="IDtoRemove">ID To Remove: </label>
      <input class="form-control" id="IDtoRemove" type="text" name="IDtoRemove"/>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Remove From Featured" name="removeFromFeaturedPrevious" id="removeFromFeaturedPrevious" />


</form>


  <?php

    //on submission of form
    if(isset($_POST["removeFromFeaturedPrevious"]))
    {
        //database connection
        $conn2 = new Dbconnect;
        $db2 = $conn2->getDb();

          
        $IDtoRemove = $_POST['IDtoRemove'];
    
    //database query
      
      $query2 = "UPDATE event SET showOnPrevious='no' WHERE id=$IDtoRemove";

      $statement2 = $db2->prepare($query2);
      $statement2->bindValue(':IDtoRemove', $IDtoRemove, PDO::PARAM_INT);
      $statement2->execute();

      echo "Event with ID {$IDtoRemove} has been removed from the list of featured previous events.";

      $conn2=null;
    }

    ?>






</div><!--end class col-lg-5 -->

</div><!--end class row-->


<div class='row'>
<div class='col-lg-12'>

<h3>All Previous Events</h3>


<?php

    $conn3 = new Dbconnect;
    $db3 = $conn3->getDb();
    $query3 = "SELECT * FROM event WHERE (imgShape='coverPhoto' AND status='previous') GROUP BY eventDate DESC";
    $statement3 = $db3->prepare($query3);
    $statement3->execute();
    $showPrevious = $statement3->fetchAll(PDO::FETCH_OBJ);

foreach($showPrevious as $p)
{

  echo "<div class='col-lg-3' style='margin-top:20px;'>";
  echo "<a target='_blank' href='" . $p->facebookURL . "'> <img style='width:80%;margin-left:5%;' src='eventPicViewerImg.php?id=" . $p->id . "'></a>";
  //echo "<img src='eventPicViewerImg.php?id=" . $p->id . "'>";
  echo "<br/><div>Event ID: " . $p->id . "<br/>Name: " . $p->name . "<br/>Date: " . $p->eventDate . "</div>";
  echo "</div>";

}


  ?>



</div><!--end col-lg-12-->
</div><!--end row-->




</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>