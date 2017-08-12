<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <div class="content-wrapper">

<div class="row">

<div class="col-lg-4" style='margin-left:5%;'>


<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $id = $_GET['id'];
    $query = 'SELECT * FROM login WHERE id = ' . $id;
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $oneContact = $statement->fetch();

    $secondName=$oneContact['otherName'];

    if(!$secondName)
    {
        $secondName="";
    }
    else
    {
        $secondName="(" . $oneContact['otherName'] . ")";
    }

?>




<h1><?php echo $oneContact['firstName'] . " " . $oneContact['lastName'] . " " . $secondName; ?></h1>

<h2>Contact Information</h2>

<h3><?php echo $oneContact['role']; ?></h3>

<div>
<strong>Phone Numbers</strong>
<div><?php echo $oneContact['phone1']; ?></div>
<div><?php echo $oneContact['phone2']; ?></div>
</div>

<br/>

<div>
<strong>Email</strong>
<div><?php echo $oneContact['email1']; ?></div>
<div><?php echo $oneContact['email2']; ?></div>
</div>

<br/>

<div>
<div><strong>Facebook</strong><div>
<?php
    echo "<a target='_blank' href=" . $oneContact['FBProfile'] . ">" . "Profile: " . $oneContact['FBProfile'] . "</a>";
?>
</div>

<br/>

<div>
<strong>Other General</strong>
<div>ID: <?php echo $oneContact['id']; ?></div>
<div>username: <?php echo $oneContact['username']; ?></div>
</div>

<br/>

<div>

<?php

    //test for DJ
    $dbconn2 = new Dbconnect;
    $db2 = $dbconn2->getDb();
    $id2 = $_GET['id'];
    $query2 = 'SELECT * FROM login WHERE id = ' . $id2 . ' AND role = "DJ" ';
    $statement2 = $db2->prepare($query2);
    $statement2->bindValue(':id', $id2, PDO::PARAM_INT);
    $statement2->execute();
    $DJcontact = $statement2->fetch();

    

    if($DJcontact)
    {
        echo "<strong>DJ Info</strong>";
        echo "<div>Genre: " . $DJcontact['DJGenre'] . "</div>";
        echo "<div>Min (or firm) Price: " . $DJcontact['DJPriceMin'] . "</div>";
        echo "<div>Max Price: " . $DJcontact['DJPriceMax'] . "</div>";
    }

?>


<?php

    //test for promoter
    $dbconn3 = new Dbconnect;
    $db3 = $dbconn3->getDb();
    $id3 = $_GET['id'];
    $query3 = 'SELECT * FROM login WHERE id = ' . $id3 . ' AND role = "promoter" ';
    $statement3 = $db3->prepare($query3);
    $statement3->bindValue(':id', $id3, PDO::PARAM_INT);
    $statement3->execute();
    $promoContact = $statement3->fetch();

    if($promoContact)
    {
        echo "<strong>Promoter Info</strong>";
        echo "<div>Price: " . $promoContact['promoPrice'] . "</div>";
        echo "<div>Policy: " . $promoContact['promoPolicy'] . "</div>";
    }


/*
$myRole=$oneContact['role'];
$correctRole=($row['role']);

       if($myRole=$correctRole)
    {
        ?>
        <strong>DJ Info</strong>
        <?php
        echo "<div>Genre: " . $oneContact['DJGenre'] . "</div>";
        echo "<div>Min (or firm) Price: " . $oneContact['DJPriceMin'] . "</div>";
        echo "<div>Max Price: " . $oneContact['DJPriceMax'] . "</div>";

    }
    else
    {
        echo "<br/>";
    }
*/

/*Idea:
    if(point.role='DJ')
    {
        echo "<div>Genre: <?php echo $oneContact['DJGenre']; ?></div>";
        echo "<div>Min (or firm) Price: <?php echo $oneContact['DJPriceMin']; ?></div>";
        echo "<div>Max Price: <?php echo $oneContact['DJPriceMax']; ?></div>";

    }*/

?>

<br/>
<br/>
<br/>

<p>Spot to update info - coming soon!</p>


</div>

<br/>


</div>
</div>

<br/>
<br/>






</div><!--first col-lg -->

<div class="col-lg-6" style='margin-left:5%;'>

<div style='width:60%;margin-top:50px;'>
<br/>
<br/>
<?php echo "<img src='userPicViewerImg.php?id=" . $oneContact['id'] . "' style='width:80%;'>"; ?>

</div>

</div><!--end col-lg-4-->



</div><!--row-->
</div><!--end content-wrapper-->



<?php

include 'footer.php';

?>