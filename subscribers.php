<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6 col-leg-offset-3">



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

</div><!--end col lg 8 offset 2-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>