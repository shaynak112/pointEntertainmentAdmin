<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-8 col-lg-offset-2" style='margin-left:5%;'>


<h1>Financial Overview</h1>

</div>
</div>

<div class="row">
<div class="col-lg-8 col-lg-offset-2" style='margin-left:5%;'>


<?php
    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $id = $_GET['id'];
    $query = 'SELECT * FROM financials WHERE id = ' . $id;
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $oneF = $statement->fetch();

    $INTLCost = $oneF['INTLFlight'] + $oneF['INTLHotel'] + $oneF['INTLFood'] + $oneF['INTLTransit'] + $oneF['INTLPay'] + $oneF['INTLBookingFee'] + $oneF['INTLExtra'] + $oneF['alcohol'] + $oneF['food'] + $oneF['rider'];
    $DJCost = $oneF['DJ1Pay'] + $oneF['DJ2Pay'] + $oneF['DJ3Pay'] + $oneF['DJ4Pay'] + $oneF['DJ5Pay'] + $oneF['DJ6Pay'] + $oneF['DJ7Pay'] + $oneF['DJ8Pay'] + $oneF['DJ9Pay'] + $oneF['DJ0Pay'];
    $promoCost = $oneF['promo1Pay'] + $oneF['promo2Pay'] + $oneF['promo3Pay'] + $oneF['promo4Pay'] + $oneF['promo5Pay'] + $oneF['promo6Pay'] + $oneF['promo7Pay'] + $oneF['promo8Pay'];
    $extraCost = $oneF['assistantPay'] + $oneF['doorperson'] + $oneF['security'] + $oneF['decorations'] + $oneF['visuals'] + $oneF['photographer'] + $oneF['flyerDesign'] + $oneF['flyerPrinting'] + $oneF['extraCosts1'] + $oneF['extraCosts2'];
    $totalCost = $INTLCost + $DJCost + $promoCost + $extraCost;
    $totalRevenue = $oneF['revenue'];
    $totalEarnings = $totalRevenue - $totalCost;

?>

<h2><?php echo $oneF['eventName']; ?> on <?php echo $oneF['eventDate']; ?> </h2>


</div>
</div>

<br/>
<br/>
<br/>

<div class='row'>
<div class='col-lg-10' style='font-size:1.2em;margin-left:5%;'>

  <div class='col-lg-3'>
    <h3>Summary</h3>
    Earnings: <?php echo $totalEarnings; ?>
    <br/>
    Cost: <?php echo $totalCost; ?>
    <br/>
    Revenue: <?php echo $totalRevenue; ?>
    <br/>
    Attendees: <?php echo $oneF['attendees']; ?>
    <br/>
  </div>

  <div class='col-lg-3'>
    <h3>Door Prices</h3>
    Price 1: $<?php echo $oneF['discountPrice1']; ?>
    <br/>
    Price 2: $<?php echo $oneF['discountPrice2']; ?>
    <br/>
    Price 3: $<?php echo $oneF['discountPrice3']; ?>
    <br/>
  </div>

  <div class='col-lg-3'>
    <h3>Summary</h3>
    International Costs: $<?php echo $INTLCost; ?>
    <br/>
    DJ Costs: $<?php echo $DJCost; ?>
    <br/>
    Promoter Costs: $<?php echo $promoCost; ?>
    <br/>
    Extra Costs: $<?php echo $extraCost; ?>
    <br/>

  </div>



</div>
</div>

<br/>
<br/>
<br/>

<div class='row'>
<div class='col-lg-10' style='margin-left:5%;'>


  <div class='col-lg-3'>
    <h3>Internationals</h3>
    <?php
      echo "<div>Payment: $" . $oneF['INTLPay'] . "</div>";
      echo "<div>Booking Fee: $" . $oneF['INTLBookingFee'] . "</div>";
      echo "<div>Flight: $" . $oneF['INTLFlight'] . "</div>";
      echo "<div>Hotel: $" . $oneF['INTLHotel'] . "</div>";
      echo "<div>Food: $" . $oneF['INTLFood'] . "</div>";
      echo "<div>Rider: $" . $oneF['rider'] . "</div>";
      echo "<div>Extra Costs: $" . $oneF['INTLExtra'] . "</div>";
      echo "<div>For the event: </div>";
      echo "<div>Alcohol: $" . $oneF['alcohol'] . "</div>";
      echo "<div>Food: $" . $oneF['food'] . "</div>";
    ?>
  </div>

  <div class='col-lg-3'>
    <h3>DJs</h3>
    <?php
      echo "<div>" . $oneF['DJ1'] . ": $" . $oneF['DJ1Pay'] . "</div>";
      echo "<div>" . $oneF['DJ2'] . ": $" . $oneF['DJ2Pay'] . "</div>";
      echo "<div>" . $oneF['DJ3'] . ": $" . $oneF['DJ3Pay'] . "</div>";
      echo "<div>" . $oneF['DJ4'] . ": $" . $oneF['DJ4Pay'] . "</div>";
      echo "<div>" . $oneF['DJ5'] . ": $" . $oneF['DJ5Pay'] . "</div>";
      echo "<div>" . $oneF['DJ6'] . ": $" . $oneF['DJ6Pay'] . "</div>";
      echo "<div>" . $oneF['DJ7'] . ": $" . $oneF['DJ7Pay'] . "</div>";
      echo "<div>" . $oneF['DJ8'] . ": $" . $oneF['DJ8Pay'] . "</div>";
      echo "<div>" . $oneF['DJ9'] . ": $" . $oneF['DJ9Pay'] . "</div>";
      echo "<div>" . $oneF['DJ0'] . ": $" . $oneF['DJ0Pay'] . "</div>";
    ?>
  </div>

  <div class='col-lg-3'>
    <h3>Promoters</h3>
    <?php
      echo "<div>" . $oneF['promo1'] . ": $" . $oneF['promo1Pay'] . "</div>";
      echo "<div>" . $oneF['promo2'] . ": $" . $oneF['promo2Pay'] . "</div>";
      echo "<div>" . $oneF['promo3'] . ": $" . $oneF['promo3Pay'] . "</div>";
      echo "<div>" . $oneF['promo4'] . ": $" . $oneF['promo4Pay'] . "</div>";
      echo "<div>" . $oneF['promo5'] . ": $" . $oneF['promo5Pay'] . "</div>";
      echo "<div>" . $oneF['promo6'] . ": $" . $oneF['promo6Pay'] . "</div>";
      echo "<div>" . $oneF['promo7'] . ": $" . $oneF['promo7Pay'] . "</div>";
      echo "<div>" . $oneF['promo8'] . ": $" . $oneF['promo8Pay'] . "</div>";
    ?>
  </div>

  
  <div class='col-lg-3'>
    <h3>Extras</h3>
    <?php
      echo "<div>Assistant: $" . $oneF['assistantPay'] . "</div>";
      echo "<div>Doorperson: $" . $oneF['doorperson'] . "</div>";
      echo "<div>Security: $" . $oneF['security'] . "</div>";
      echo "<div>Decorations: $" . $oneF['decorations'] . "</div>";
      echo "<div>Visuals: $" . $oneF['visuals'] . "</div>";
      echo "<div>Photographer: $" . $oneF['photographer'] . "</div>";
      echo "<div>Flyer Design: $" . $oneF['flyerDesign'] . "</div>";
      echo "<div>Flyer Printing: $" . $oneF['flyerPrinting'] . "</div>";
      echo "<div>Extra Costs 1: $" . $oneF['extraCosts1'] . "</div>";
      echo "<div>Extra Costs 2: $" . $oneF['extraCosts2'] . "</div>";
    ?>
  </div>



  

</div>
</div> 



</div><!--end div for content col-lg-8 col-->
</div><!--end of row for-->



</div><!--end col lg 8 offset 2--><!--end partner Page div-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>
