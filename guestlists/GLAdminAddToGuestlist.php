<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-10 col-lg-offset-2">




<h1>Adding Guestlist Names</h1>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT id,name,eventDate FROM event WHERE status='future' ORDER BY eventDate ASC LIMIT 5";
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
$fourthEventID=$eventIDs[3];
$fifthEventID=$eventIDs[4];

    ?>


</div>
</div>

<div class="row">

<h2 style='text-align:center;'><?php echo $eventNames[0] . " on " . $eventDates[0]; ?></h2>

<div class='col-lg-4 col-lg-offset-1' >

<h3>Add A Guest</h3>

<div class="promoDJForm">

                <form id="formPromoDJ" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="promo2">Promoter or DJ Name</label>
                <input class="form-control" type="text" name="promo2" id="promo2"></div>

                <div><label class="control-label formEventClass" for="name2">Name (first and last)</label>
                <input class="form-control" type="text" name="name2" id="name2"></div>

                <div><label class="control-label formEventClass" for="guests2">Number of Guests</label>
                <input class="form-control" type="text" name="guests2" id="guests2"></div>
                
                <div><label class="control-label FormEventClass" for="email2">Notes (Optional)</label>
                <input type="text" class="form-control" name="email2" id="email2"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitOtherGuest" name="submitOtherGuest" value="Add To Guestlist"/>

                </form> 


                 <?php


                if(isset($_POST['submitOtherGuest']))
                {


                $dbconn1 = new Dbconnect;
                $db1 = $dbconn1->getDb();
                $query1 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES($firstEventID, :glPromo, :glName, :glGuests, :glEmail)";
                $statement1 = $db1->prepare($query1);
                $statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement1->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement1->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement1->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement1->execute();
                }
            ?>

                </div><!--end form div-->


</div><!--end col-lg-6-->

<div class='col-lg-6'>

<h3>Add A Full Guestlist</h3>
<p>Enter in this form: Alika,5/Ben,2/Lexy,8/Veronika,4 so there is a comma between each guest and their guests and a slash between each guest. If any have notes, add them individually.</p>

<div class="promoDJFormMass">

                <form id="formPromoDJMass" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="promo2">Promoter or DJ Name</label>
                <input class="form-control" type="text" name="promo2" id="promo2"></div>


                <div class="form-group">
                <label for="eventDescription">Guests (please use above format): </label>
                <textarea class="form-control" rows="5" id="eventDescription" name="eventDescription"></textarea>
                </div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitOtherGuest" name="submitOtherGuest" value="Add To Guestlist"/>


                </form>
</div>





</div><!--end col-lg-6-->

</div><!--end row-->

<br/>
<br/>

<div style='width:100%;height:15px;background-color:#605CA8;margin-left:0px;'>
</div>
<br/>
<br/>

<div class="row">

<h2 style='text-align:center;'><?php echo $eventNames[1] . " on " . $eventDates[1]; ?></h2>

<div class='col-lg-4 col-lg-offset-1' >

<h3>Add A Guest</h3>

<div class="promoDJForm">

                <form id="formPromoDJ" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="promo2">Promoter or DJ Name</label>
                <input class="form-control" type="text" name="promo2" id="promo2"></div>

                <div><label class="control-label formEventClass" for="name2">Name (first and last)</label>
                <input class="form-control" type="text" name="name2" id="name2"></div>

                <div><label class="control-label formEventClass" for="guests2">Number of Guests</label>
                <input class="form-control" type="text" name="guests2" id="guests2"></div>
                
                <div><label class="control-label FormEventClass" for="email2">Notes (Optional)</label>
                <input type="text" class="form-control" name="email2" id="email2"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitOtherGuest" name="submitOtherGuest" value="Add To Guestlist"/>

                </form> 


                 <?php


                if(isset($_POST['submitOtherGuest']))
                {


                $dbconn1 = new Dbconnect;
                $db1 = $dbconn1->getDb();
                $query1 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES($secondEventID, :glPromo, :glName, :glGuests, :glEmail)";
                $statement1 = $db1->prepare($query1);
                $statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement1->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement1->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement1->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement1->execute();
                }
            ?>

                </div><!--end form div-->


</div><!--end col-lg-6-->

<div class='col-lg-6'>

<h3>Add A Full Guestlist</h3>
<p>Enter in this form: Alika,5/Ben,2/Lexy,8/Veronika,4 so there is a comma between each guest and their guests and a slash between each guest. If any have notes, add them individually.</p>

<div class="promoDJFormMass">

                <form id="formPromoDJMass" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="promo2">Promoter or DJ Name</label>
                <input class="form-control" type="text" name="promo2" id="promo2"></div>


                <div class="form-group">
                <label for="eventDescription">Guests (please use above format): </label>
                <textarea class="form-control" rows="5" id="eventDescription" name="eventDescription"></textarea>
                </div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitOtherGuest" name="submitOtherGuest" value="Add To Guestlist"/>


                </form>
</div>




</div><!--end col-lg-6-->

</div><!--end row-->




</div><!--end col lg 8 offset 2-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>