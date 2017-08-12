<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6">



<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM subscribe WHERE subscribe='subscribed' ORDER BY dateSubscribed DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $subs = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<div id='subscriberList' style='margin-left:5%;'>

<h1>Subscribers</h1>

<table>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Date Subscribed</th>
	</tr>

	<?php
		foreach($subs as $s)
		{
			echo "<tr>";
			echo "<td>" . $s->firstName . "</td>";
			echo "<td>" . $s->lastName . "</td>";
			echo "<td>" . $s->email . "</td>";
			echo "<td>" . $s->dateSubscribed . "</td>";
			echo "</tr>";
		}

	?>


</table>





</div><!--end subscriberList div-->

</div><!--end col lg 6-->


<div class="col-lg-6">


<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM newslettersSent ORDER BY dateSent DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $newsSent = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<div id='newslettersSentList' style='margin-left:5%;'>

<h1>Newsletters Sent</h1>

<table>
	<tr>
	<th>ID</th>
	<th style='padding-left:3%;'>Date Sent</th>
	<th style='padding-left:3%;'>Type</th>
	<th style='padding-left:3%;'>Sender ID</th>
	<th style='padding-left:3%;'>Notes</th>
	</tr>

	<?php
		foreach($newsSent as $s)
		{
			echo "<tr>";
			echo "<td>" . $s->id . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->dateSent . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->type . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->senderID . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->adminNotes . "</td>";
			echo "</tr>";
		}

	?>


</table>


</div><!--end col-lg-6-->


</div><!--end row-->

<div class="row">

<div class="col-lg-12">

<br/>
<br/>

<div id='subscriberLine' style='width:100%;height:15px;background-color:#337ab7;margin-left:0px;'>
</div>

<br/>
<br/>

</div><!--end col-lg-6-->
</div><!--end row-->



<div class="row">

<div class="col-lg-10" style='margin-left:5%;'>

<h2>Newsletter Templates</h2>

<div class="col-lg-4">

<h3>Contest</h3>

 <form name="subscribersContest" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="subWin">What subscribers would win: </label>
      <input class="form-control" placeholder='Example: Free entry for you and a friend' id="subWin" type="text" name="subWin"/>
      </div>

      <div>
      <label class="control-label" for="subEvent">Event Name: </label>
      <input class="form-control" placeholder='Jayforce Tech House on April 22' id="subEvent" type="text" name="subEvent"/>
      </div>

      <div>
      <label class="control-label" for="subFB">Facebook URL: </label>
      <input class="form-control" placeholder='URL for Facebook event; users can still share via Instagram or Twitter though' id="subFB" type="text" name="subFB"/>
      </div>


      <div>
      <label class="control-label" for="subWinDate">Date Winner Will Be Announced: </label>
      <input class="form-control" placeholder='when winner will be announced; does not have to be in a specific form' id="subWinDate" type="text" name="subWinDate"/>
      </div>

       <div>
      <label class="control-label" for="subContestAdmin">Admin Notes: </label>
      <input class="form-control" placeholder='notes about the contest' id="subContestAdmin" type="text" name="subContestAdmin"/>
      </div>

       <br/>

      <input class="btn btn-primary" type="submit" value="Email Contest Email" name="subSendContest" id="subSendContest" />

      <!--could have a preview before being sent
		1. preview
		2. confirm
		3. update newsLettersSent baed on type and use sessions for sender ID and notes if anything important
		4. send email

      -->

      <?php


      if(isset($_POST["subSendContest"]))
      {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        $win = $_POST['subWin'];
        $eventName = $_POST['subEvent'];
        $socialMediaURL = $_POST['subFB'];
        $winDate = $_POST['subWinDate'];
        $adminNotes = $_POST['subContestAdmin'];

        $message = "Hi Point Subscribers! <br/><br/> Would you like to win " . $win . "? Reply to this email and share the " . $eventName . " on your Facebook/Twitter/Instagram publicly to show how excited you are. Link: <a href='" . $socialMediaURL . "'>" . $socialMediaURL . "</a>. Reply with the public link you've shared to be entered into this contest! Winner will be announced on " . $winDate . ".<br/><br/>Good luck!<br/><br/><a href='www.pointentertainmentto.com'>www.pointentertainmentto.com</a>";

        ?>

        <div>
        <br/>
        <br/>

        <strong>Message To Be Sent</strong>
        <br/>
        <br/>

        <?php echo $message; ?>


        </div>

        <br/>
        <br/>
        <p>There will be a link to confirm to send it</p>
        <br/>
        <br/>


        <?php

      }


      ?>


 </form>

<!--need php to do the action-->

</div><!--end col for contest-->

<div class="col-lg-4">

<h3>Upcoming Events</h3>

 <form name="subscribersUpcoming" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="subNumEvents">How many events to feature: </label>
      <input class="form-control" placeholder='should only include up to 3 or 4' id="subNumEvents" type="text" name="subNumEvents"/>
      </div>

      <div>
      <label class="control-label" for="subFeatured">Featured Event ID: </label>
      <input class="form-control" placeholder='ID of main event to be featured' id="subFeatured" type="text" name="subFeatured"/>
      </div>

       <div>
      <label class="control-label" for="subUpcomingAdmin">Admin Notes: </label>
      <input class="form-control" placeholder='promoting Vinyl B2B at another club same day' id="subUpcomingAdmin" type="text" name="subUpcomingAdmin"/>
      </div>

       <br/>

      <input class="btn btn-primary" type="submit" value="Email Upcoming Events" name="sendUpcomingEvents" id="sendUpcomingEvents" />

      <!--could have a preview before being sent
		1. preview
		2. user confirm
		3. update newsLettersSent baed on type and use sessions for sender ID and admin notes
		4. send email

      -->
      <?php


      if(isset($_POST["sendUpcomingEvents"]))
      {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        $numEvents = $_POST['subNumEvents'];
        $featuredEvent = $_POST['subFeatured'];
        $adminNotes = $_POST['subUpcomingAdmin'];


      }


      ?>



 </form>


</div><!--end col for upcoming events-->


<div class="col-lg-4">

<h3>General Update</h3>


 <form name="subscribersUpdate" class="form-horizontal" enctype="multipart/form-data" method="post" action="">


 	  <div>
 	  <label class='subMessage'>Write your message below.</label>
 	  <textarea name='subMessage' id='subMessage' rows='20' cols='60' placeholder='Write your full message here.'>
 	  </textarea>
 	 </div>

 	   <div>
      <label class="control-label" for="subGeneralAdmin">Admin Notes: </label>
      <input class="form-control" placeholder='any specific purpose to the email to include in admin notes' id="subGeneralAdmin" type="text" name="subGeneralAdmin"/>
      </div>


       <br/>

      <input class="btn btn-primary" type="submit" value="Email General Update" name="sendGeneralUpdate" id="sendGeneralUpdate" />

            <!--could have a preview before being sent
		1. preview
		2. user confirm
		3. update newsLettersSent baed on type and use sessions for sender ID and notes if anything important
		4. send email

      -->



 </form>





</div><!--end col for general update-->

</div><!--end col-->
</div><!--end row-->



</div> <!--end content wrapper-->




<?php

include 'footer.php';

?>