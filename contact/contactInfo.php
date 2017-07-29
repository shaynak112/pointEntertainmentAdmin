<?php
include 'header.php';
include 'head.php';
include 'adminNav.php';
?>

<!--<script type='text/javascript' src="testLoginScript.js"></script>-->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6">



<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM login ORDER BY role ASC, firstName ASC, lastName ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $login = $statement->fetchAll(PDO::FETCH_OBJ);
    //$increment=1;

?>

<div id='contactDiv' style='margin-left:10%;'>

<h1>Contacts</h1>

<table>
	<tr>
	<th style='padding-left:3%;width:5%;'>Picture</th>
	<th style='padding-left:3%;width:3%;'>First Name</th>
	<th style='padding-left:3%;width:3%;'>Last Name</th>
	<th style='padding-left:3%;width:3%;'>Other Name</th>
	<th style='padding-left:3%;width:3%;'>Role</th>
	<th style='padding-left:3%;width:3%;'>More Info</th>
	</tr>

	<?php
		foreach($login as $s)
		{
			echo "<tr>";
			echo "<td><img src='userPicViewerImg.php?id={$s->id}' style='height:20px;padding-left:3%;top:0px;display:inline-block;margin-top:0px;'></a></td>";
			echo "<td style='padding-left:3%;''>" . $s->firstName . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->lastName . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->otherName . "</td>";
			echo "<td style='padding-left:3%;'>" . $s->role . "</td>";
			echo "<td style='padding-left:3%;'><a href='oneContact.php?id=" . "{$s->id}'>" . "Info" . "</a></td>";
			echo "</tr>";
		}

	?>



</table>


</div><!--end contact div-->

</div><!--end col lg 8 offset 2-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>