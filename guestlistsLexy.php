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

                <br/>
                    <a href="https://www.facebook.com/events/1404843436239827/" target="_blank">Facebook Event Page</a>
                    
                <br/>


</div>
</div>

<div class="row">



<div class="col-lg-4" style='margin-left:5%;'>

<h3>Lexy's GL for July 15, Vinyl and Classics</h3>

<p><strong>No worries, this will all be much smoother for the next one! hahaha</strong></p>





                <div class="LexyForm">

                <form id="formLexy" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name2">Name (first and last)</label>
                <input class="form-control" type="text" name="name2" id="name2"></div>

                <div><label class="control-label formEventClass" for="guests2">Number of Guests</label>
                <input class="form-control" type="text" name="guests2" id="guests2"></div>
                
                <div><label class="control-label FormEventClass" for="email2">Email Address</label>
                <input type="text" class="form-control" name="email2" id="email2"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitLexyGuest" name="submitLexyGuest" value="Add To Guestlist"/>

                </form> 

                </div><!--end form div-->

           

                 <?php


                if(isset($_POST['submitLexyGuest']))
                {
                  $subject = "Guestlist for July 15 Vinyl Classics Night";
                  $glName = $_POST['name2'];
                  $glEmail = $_POST['email2'];
                  $glGuests = $_POST['guests2'];
                  $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . " guests.";
                  #mail($to,$subject,$message,$from);
                  echo "<br/>";
                  echo "Thank you, {$glName}, looking forward to seeing you!";

                $dbconn1 = new Dbconnect;
                $db1 = $dbconn1->getDb();
                $query1 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES(30, 'Lexy', :glName, :glGuests, :glEmail)";
                $statement1 = $db1->prepare($query1);
                $statement1->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement1->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement1->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement1->execute();
                }
            ?>

        </div><!--end left side div-->


        

<div class="col-lg-4" style='margin-left:5%;'>

<h3>Promoters and DJs GL for July 15, Vinyl and Classics</h1>

<p><strong>Again, it'll look nicer...eventually!</strong></p>
<p>We'll also have a dropdown of all promoters/DJs involved and see if we can do a text box rather than adding them all individually</p>

    


                       
                <div class="promoDJForm">

                <form id="formPromoDJ" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="promo2">Promoter or DJ Name</label>
                <input class="form-control" type="text" name="promo2" id="promo2"></div>

                <div><label class="control-label formEventClass" for="name2">Name (first and last)</label>
                <input class="form-control" type="text" name="name2" id="name2"></div>

                <div><label class="control-label formEventClass" for="guests2">Number of Guests</label>
                <input class="form-control" type="text" name="guests2" id="guests2"></div>
                
                <div><label class="control-label FormEventClass" for="email2">Email Address</label>
                <input type="text" class="form-control" name="email2" id="email2"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitOtherGuest" name="submitOtherGuest" value="Add To Guestlist"/>

                </form> 

                </div><!--end form div-->

           

                 <?php


                if(isset($_POST['submitOtherGuest']))
                {
                  $subject = "Guestlist for July 15 Vinyl Classics Night";
                  $glName = $_POST['name2'];
                  $glEmail = $_POST['email2'];
                  $glGuests = $_POST['guests2'];
                  $glPromo = $_POST['promo2'];

                  #$message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . " guests.";
                  #mail($to,$subject,$message,$from);
                  #echo "<br/>";
                  echo "{$glName} added!";

                $dbconn1 = new Dbconnect;
                $db1 = $dbconn1->getDb();
                $query1 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES(30, :glPromo, :glName, :glGuests, :glEmail)";
                $statement1 = $db1->prepare($query1);
                $statement1->bindValue(':glPromo', $glPromo, PDO::PARAM_STR);
                $statement1->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement1->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement1->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement1->execute();
                }
            ?>


        </div><!--end left side div-->


</div><!--end div for partner list col-->
</div><!--end of row for-->






</div><!--end div for partner list col-->
</div><!--end of row for-->



</div><!--end col lg 8 offset 2--><!--end partner Page div-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>