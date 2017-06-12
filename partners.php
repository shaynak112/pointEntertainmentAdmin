<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-6 col-leg-offset-3" id='partnerPage' style='margin-left:5%;'>




<h1>Partners</h1>

</div>
</div>

<div class="row">


<div class="col-lg-3 col-leg-offset-3" style='margin-left:5%;'>

<h2>Add Partner</h2>

 <form name="addPartnerForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addPartnerName">Partner Name: </label>
      <input class="form-control" id="addPartnerName" type="text" name="addPartnerName"/>
      </div>

      <div>
      <label class="control-label" for="addPartnerURL">Link/URL: </label>
      <input class="form-control" id="addPartnerURL" type="text" name="addPartnerURL"/>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Add Partner" name="addPartner" id="addPartner" />

    </form>

  <div id="addPartnerSubmitDiv">

    <?php

    //on submission of form
    if(isset($_POST["addPartner"]))
    {
        //database connection
        $conn1 = new Dbconnect;
        $db1 = $conn1->getDb();

        //$val = new Validate();
          
        $partnerName = $_POST['addPartnerName'];
        $partnerURL = $_POST['addPartnerURL'];

        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query1 = "INSERT INTO partners (partnerName, partnerURL) VALUES (:partnerName, :partnerURL)";

      $statement1 = $db1->prepare($query1);

   

      $statement1->bindValue(':partnerName', $partnerName, PDO::PARAM_STR);
      $statement1->bindValue(':partnerURL', $partnerURL, PDO::PARAM_STR);
     

      $statement1->execute();

      echo "{$partnerName} has been added to the list of partners.";

      $conn1=null;
    }
    ?>


    <h2>Remove Partner</h2>

    <form name="removePartnerForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removePartnerID">Partner ID: </label>
      <input class="form-control" id="removePartnerID" type="text" name="removePartnerID"/>
      </div>

      <br/>

      <input class="btn btn-primary" type="submit" value="Remove Partner" name="removePartner" id="removePartner" />

    </form>

    <?php

    //on submission of form
    if(isset($_POST["removePartner"]))
    {
        //database connection
        $conn2 = new Dbconnect;
        $db2 = $conn2->getDb();

        //$val = new Validate();
          
        $partnerID2 = $_POST['removePartnerID'];

        /*validate
        $valTitle = $val->text($imgTitle);
        $valCategory = $val->text($imgCategory);*/

    
    //database query
        $query2 = "DELETE FROM partners WHERE id=$partnerID2";

        $statement2 = $db2->prepare($query2);

  
      $statement2->bindValue(':partnerID2', $partnerID2, PDO::PARAM_INT);
     

      $statement2->execute();

      echo "Removed, thank you.";

     $conn2=null;
    }
    ?>


  </div> <!--end addPartnerSubmitDiv -->


</div><!--end div for add partner col-->


<div class="col-lg-6" style='margin-left:5%;'>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM partners ORDER BY partnerName ASC";
    $statement = $db->prepare($query);
    $statement->execute();
    $partners = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<h2>List of Partners</h2>



<table>
	<tr>
  <th>ID</th>
	<th>Name</th>
	<th>URL</th>
	</tr>

	<?php
		foreach($partners as $p)
		{
			echo "<tr>";
      echo "<td>" . $p->id . "</td>";
			echo "<td>" . $p->partnerName . "</td>";
			echo "<td><a href='" . $p->partnerURL . "' target='_blank'>" . $p->partnerURL . "</td>";
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