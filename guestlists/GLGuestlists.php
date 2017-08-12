<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-12" style='margin-left:5%;'>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT id,name,eventDate FROM event WHERE status='future' ORDER BY eventDate ASC LIMIT 3";
    #$query = "SELECT id,name,date FROM event WHERE date >= $dateNow  ORDER BY date DESC LIMIT 3";
    $statement = $db->prepare($query);
    $statement->execute();
    $nextThreeEvents = $statement->fetchAll(PDO::FETCH_OBJ);

    $eventIDs = array();
    $eventNames = array();
    $eventDates = array();

foreach($nextThreeEvents as $e)
{

//$eventOne  = array("eventID"=> $e->id, "eventName"=> $e->name, "eventDate"=> $e->eventDate);

array_push($eventIDs, $e->id);
array_push($eventNames, $e->name);
array_push($eventDates, $e->eventDate);

}

$firstEventID=$eventIDs[0];
$secondEventID=$eventIDs[1];
$thirdEventID=$eventIDs[2];

    ?>


<h1>Guestlists</h1>





</div>
</div>

<div class="row">



<div class="col-lg-4">

<h2><?php echo $eventNames[0] . " on " . $eventDates[0]; ?></h2>

  <?php
    $dbconn1 = new Dbconnect;
    $db1 = $dbconn1->getDb();
    $query1 = "SELECT id, eventID, promoter, guestName, plus FROM guestlist WHERE eventID=$firstEventID ORDER BY guestName ASC";
    $statement1 = $db1->prepare($query1);
    $statement1->execute();
    $eventOneGL = $statement1->fetchAll(PDO::FETCH_OBJ);
?>




<table style='width:100%;padding:3px;border-spacing:10px;'>

  <tr style='text-align:right;'>
    <th style='text-align:right;padding-right:3%;'>Name</th>
    <th>Guests</th>
    <th>Promoter</th>
  </tr>

    <?php
        foreach($eventOneGL as $z)
        {
            echo "<tr style='border-bottom:2px solid black;'>";
            echo "<td style='padding:3px;padding-right:3%;text-align:right;'>" . $z->guestName . "</td>";
            echo "<td style='padding:3px;'>" . " + " . $z->plus . "</td>";
            echo "<td style='padding:3px;'>" . $z->promoter . "</td>";
            echo "</tr>";
        }

    ?>


</table>


</div>


<div class="col-lg-4">

<h2><?php echo $eventNames[1] . " on " . $eventDates[1]; ?></h2>

  <?php
    $dbconn2 = new Dbconnect;
    $db2 = $dbconn2->getDb();
    $query2 = "SELECT id, eventID, promoter, guestName, plus FROM guestlist WHERE eventID=$secondEventID ORDER BY guestName ASC";
    $statement2 = $db2->prepare($query2);
    $statement2->execute();
    $eventTwoGL = $statement2->fetchAll(PDO::FETCH_OBJ);
?>




<table style='width:100%;padding:3px;border-spacing:10px;'>

  <tr style='text-align:right;'>
    <th style='text-align:right;padding-right:3%;'>Name</th>
    <th>Guests</th>
    <th>Promoter</th>
  </tr>

    <?php
        foreach($eventTwoGL as $z)
        {
            echo "<tr style='border-bottom:2px solid black;'>";
            echo "<td style='padding:3px;padding-right:3%;text-align:right;'>" . $z->guestName . "</td>";
            echo "<td style='padding:3px;'>" . " + " . $z->plus . "</td>";
            echo "<td style='padding:3px;'>" . $z->promoter . "</td>";
            echo "</tr>";
        }

    ?>


</table>


</div>


<div class="col-lg-4">

<h2><?php echo $eventNames[2] . " on " . $eventDates[2]; ?></h2>

  <?php
    $dbconn3 = new Dbconnect;
    $db3 = $dbconn3->getDb();
    $query3 = "SELECT id, eventID, promoter, guestName, plus FROM guestlist WHERE eventID=$thirdEventID ORDER BY guestName ASC";
    $statement3 = $db3->prepare($query3);
    $statement3->execute();
    $eventThreeGL = $statement3->fetchAll(PDO::FETCH_OBJ);
?>




<table style='width:100%;padding:3px;border-spacing:10px;'>

  <tr style='text-align:right;'>
    <th style='text-align:right;padding-right:3%;'>Name</th>
    <th>Guests</th>
    <th>Promoter</th>
  </tr>

    <?php
        foreach($eventThreeGL as $z)
        {
            echo "<tr style='border-bottom:2px solid black;'>";
            echo "<td style='padding:3px;padding-right:3%;text-align:right;'>" . $z->guestName . "</td>";
            echo "<td style='padding:3px;'>" . " + " . $z->plus . "</td>";
            echo "<td style='padding:3px;'>" . $z->promoter . "</td>";
            echo "</tr>";
        }

    ?>


</table>


</div>


</div><!--end row-->






</div><!--end col lg 8 offset 2--><!--end partner Page div-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>