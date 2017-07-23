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




<h1>View Users</h1>

</div>
</div>

<div class="row">


<div class="col-lg-10">

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM login ORDER BY active ASC, position ASC, firstName ASC, lastName ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $accounts = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<h2 style='margin-left:5%;'>List of Accounts</h2>

<table>
	<tr>
  <th style='padding-left:10%;'>ID</th>
	<th style='padding-left:5%;'>First Name</th>
	<th style='padding-left:5%;'>Last Name</th>
  <th style='padding-left:5%;'>Role</th>
  <th style='padding-left:5%;'>Active</th>
  <th style='padding-left:5%;'>Username</th>
	</tr>

	<?php
		foreach($accounts as $p)
		{
			echo "<tr>";
      echo "<td style='padding-left:10%;'>" . $p->id . "</td>";
      echo "<td style='padding-left:5%;'>" . $p->firstName . "</td>";
      echo "<td style='padding-left:5%;'>" . $p->lastName . "</td>";
			echo "<td style='padding-left:5%;'>" . $p->role . "</td>";
      echo "<td style='padding-left:5%;'>" . $p->active . "</td>";
      echo "<td style='padding-left:5%;'>" . $p->username . "</td>";
      
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
