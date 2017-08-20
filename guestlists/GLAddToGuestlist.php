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




<h1>Adding Guestlist Names</h1>




<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT id,name,eventDate FROM event WHERE status='future' OR 'draft' ORDER BY eventDate ASC LIMIT 4"; // can change to any limit

    $statement = $db->prepare($query);
    $statement->execute();
    $nextFourEvents = $statement->fetchAll(PDO::FETCH_OBJ);

    $eventIDs = array();
    $eventNames = array();
    $eventDates = array();

foreach($nextFourEvents as $e)
{

//$eventOne  = array("eventID"=> $e->id, "eventName"=> $e->name, "eventDate"=> $e->eventDate);

array_push($eventIDs, $e->id);
array_push($eventNames, $e->name);
array_push($eventDates, $e->eventDate);

}

$firstEventID=$eventIDs[0];
$secondEventID=$eventIDs[1];
$thirdEventID=$eventIDs[2];
$fourthEventID=$eventIDs[3];


?>

</div>
</div>



<div class="row">

<div class='col-lg-6'>

<h2 style='text-align:center;'><?php echo $eventNames[0] . " on " . $eventDates[0]; ?></h2>

<h3>Add A Guest</h3>

    <div class="promoDJForm">

                <form id="formPromoDJIndv0" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name0">Name (first and last)</label>
                <input class="form-control" type="text" name="name0" id="name0"></div>

                <div><label class="control-label formEventClass" for="guests0">Number of Guests</label>
                <input class="form-control" type="text" name="guests0" id="guests0"></div>
                
                <div><label class="control-label FormEventClass" for="email0">Notes (Optional)</label>
                <input type="text" class="form-control" name="email0" id="email0"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitGuest0" name="submitGuest0" value="Add To Guestlist"/>

                </form> 


                 <?php


                if(isset($_POST['submitGuest0']))
                {

                $glName = $_POST['name0'];
                $glGuests = $_POST['guests0'];
                $glEmail = $_POST['guests0'];


                $dbconn0 = new Dbconnect;
                $db0 = $dbconn0->getDb();
                $query0 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES($firstEventID, 'Lexy', :glName, :glGuests, :glEmail)";
                $statement0 = $db0->prepare($query0);
                //$statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement0->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement0->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement0->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement0->execute();

                echo "<br/>";
                echo "{$glName} has been added to the list for {$eventNames[0]}.";
                }
            ?>

    </div><!--end form div-->


</div><!--end col-lg-6-->


<div class='col-lg-6'>

<h2 style='text-align:center;'><?php echo $eventNames[1] . " on " . $eventDates[1]; ?></h2>

 <div class="promoDJForm">

                <form id="formPromoDJIndv1" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name1">Name (first and last)</label>
                <input class="form-control" type="text" name="name1" id="name1"></div>

                <div><label class="control-label formEventClass" for="guests1">Number of Guests</label>
                <input class="form-control" type="text" name="guests1" id="guests1"></div>
                
                <div><label class="control-label FormEventClass" for="email1">Notes (Optional)</label>
                <input type="text" class="form-control" name="email1" id="email1"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitGuest1" name="submitGuest1" value="Add To Guestlist"/>

                </form> 


                 <?php


                if(isset($_POST['submitGuest1']))
                {

                  $glName = $_POST['name1'];
                $glGuests = $_POST['guests1'];
                $glEmail = $_POST['guests1'];


                $dbconn1 = new Dbconnect;
                $db1 = $dbconn1->getDb();
                $query1 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES($secondEventID, 'Lexy', :glName, :glGuests, :glEmail)";
                $statement1 = $db1->prepare($query1);
                //$statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement1->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement1->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement1->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement1->execute();

                echo "<br/>";
                echo "{$glName} has been added to the list for {$eventNames[1]}.";                }
            ?>

    </div><!--end form div-->




</div><!--end col-lg-6-->


</div><!--end row-->

<br/>
<br/>


<div style='width:100%;height:15px;background-color:#605CA8;margin-left:0px;'></div>

<br/>
<br/>

<div class="row">

<div class='col-lg-6'>

<h2 style='text-align:center;'><?php echo $eventNames[2] . " on " . $eventDates[2]; ?></h2>

<div class="promoDJForm">

                <form id="formPromoDJIndv2" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name2">Name (first and last)</label>
                <input class="form-control" type="text" name="name2" id="name2"></div>

                <div><label class="control-label formEventClass" for="guests2">Number of Guests</label>
                <input class="form-control" type="text" name="guests2" id="guests2"></div>
                
                <div><label class="control-label FormEventClass" for="email2">Notes (Optional)</label>
                <input type="text" class="form-control" name="email2" id="email2"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitGuest2" name="submitGuest2" value="Add To Guestlist"/>

                </form> 


                 <?php


                if(isset($_POST['submitGuest2']))
                {

                  $glName = $_POST['name2'];
                $glGuests = $_POST['guests2'];
                $glEmail = $_POST['guests2'];


                $dbconn2 = new Dbconnect;
                $db2 = $dbconn2->getDb();
                $query2 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES($thirdEventID, 'Lexy', :glName, :glGuests, :glEmail)";
                $statement2 = $db2->prepare($query2);
                //$statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement2->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement2->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement2->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement2->execute();

                echo "<br/>";
                echo "{$glName} has been added to the list for {$eventNames[2]}.";   
                }
            ?>

    </div><!--end form div-->


</div><!--end col-lg-6-->


<div class='col-lg-6'>

<h2 style='text-align:center;'><?php echo $eventNames[3] . " on " . $eventDates[3]; ?></h2>

<div class="promoDJForm">

                <form id="formPromoDJIndv3" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name3">Name (first and last)</label>
                <input class="form-control" type="text" name="name3" id="name3"></div>

                <div><label class="control-label formEventClass" for="guests3">Number of Guests</label>
                <input class="form-control" type="text" name="guests3" id="guests3"></div>
                
                <div><label class="control-label FormEventClass" for="email3">Notes (Optional)</label>
                <input type="text" class="form-control" name="email3" id="email3"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitGuest3" name="submitGuest3" value="Add To Guestlist"/>

                </form> 


                 <?php


                if(isset($_POST['submitGuest3']))
                {

                  $glName = $_POST['name3'];
                $glGuests = $_POST['guests3'];
                $glEmail = $_POST['guests3'];


                $dbconn3 = new Dbconnect;
                $db3 = $dbconn3->getDb();
                $query3 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES($fourthEventID, 'Lexy', :glName, :glGuests, :glEmail)";
                $statement3 = $db3->prepare($query3);
                //$statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement3->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement3->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement3->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement3->execute();

                echo "<br/>";
                echo "{$glName} has been added to the list for {$eventNames[3]}.";
                }
            ?>

    </div><!--end form div-->


</div><!--end col-lg-6-->


</div><!--end row-->






</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>