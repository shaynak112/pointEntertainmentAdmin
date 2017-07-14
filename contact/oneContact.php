<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <div class="content-wrapper">

<div class="row">

<div class="col-lg-8 col-lg-offset-2" style='margin-left:10%;'>


<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $id = $_GET['id'];
    $query = 'SELECT * FROM contactInfo WHERE id = ' . $id;
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $oneContact = $statement->fetch();

?>

<h1><?php echo $oneContact['firstName'] . " " . $oneContact['lastName']; ?></h1>

<h2>Contact Information</h2>

<h3><?php echo $oneContact['role']; ?></h3>

<div>
<strong>Phone Numbers</strong>
<div><?php echo $oneContact['phone']; ?></div>
<div><?php echo $oneContact['phone2']; ?></div>
</div>

<br/>

<div>
<strong>Email</strong>
<div><?php echo $oneContact['email']; ?></div>
<div><?php echo $oneContact['email2']; ?></div>
</div>

<br/>

<div>
<strong>Facebook</strong>
<div>
<?php
    echo "<a target='_blank' href=" . $oneContact['FBProfile'] . ">" . "Profile: " . $oneContact['FBProfile'] . "</a>";
?>
</div>
</div>




</div><!--first col-lg -->
</div><!--row-->
</div><!--end content-wrapper-->



<?php

include 'footer.php';

?>
