<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<div class="row">

<div class="col-lg-10" style='margin-left:5%;'>


<h1>Financial Overview</h1>


</div>
</div>

<div class="row">
<div class="col-lg-8" style='margin-left:5%;'>

<?php

    $dbconn = new Dbconnect;
    $db = $dbconn->getDb();
    $query = "SELECT * FROM financials ORDER BY eventDate DESC";
    $statement = $db->prepare($query);
    $statement->execute();
    $finance = $statement->fetchAll(PDO::FETCH_OBJ);
?>

    <?php

      foreach($finance as $z)
      {
        ?>
        <div class="col-lg-3" style='display:inline-block;'>
            <div class='financeEventName' style='padding-top:20px;'>
            <?php
            echo "<h4>" . $z->eventName . "</h4>";
            echo "<strong>" . $z->eventDate . "</strong>";
            ?>
            </div>
            <div class='financeEventBreakdown'>
              <br/>
              <strong>Total Cost: </strong>
                <?php
                  $INTLCost = $z->INTLFlight + $z->INTLHotel + $z->INTLFood + $z->INTLTransit + $z->INTLPay + $z->INTLBookingFee + $z->INTLExtra + $z->alcohol + $z->food + $z->rider;
                  $DJCost = $z->DJ1Pay + $z->DJ2Pay + $z->DJ3Pay + $z->DJ4Pay + $z->DJ5Pay + $z->DJ6Pay + $z->DJ7Pay + $z->DJ8Pay + $z->DJ9Pay + $z->DJ0Pay;
                  $promoCost = $z->promo1Pay +  $z->promo2Pay + $z->promo3Pay + $z->promo4Pay + $z->promo5Pay + $z->promo6Pay + $z->promo7Pay + $z->promo8Pay;
                  $extraCost = $z->assistantPay + $z->doorperson + $z->security + $z->decorations + $z->visuals + $z->photographer + $z->flyerDesign + $z->flyerPrinting + $z->extraCosts1 + $z->extraCosts2;
                  $cost = $INTLCost + $DJCost + $promoCost + $extraCost;
                  echo $cost;
                ?>
              <br/>
              <strong>Total Revenue: </strong>
              <?php
                echo $z->revenue;
              ?>
              <br/>
              <strong>Earnings: </strong>
              <?php
                echo $z->revenue - $cost;
              ?>
              <br/>
              <strong>Attendees: </strong>
              <?php
                echo $z->attendees;
              ?>
              <br/>
              <?php
              echo "<strong><a href='financeOneEvent.php?id=" . "{$z->id}'>" . "More Detailed Info?" . "</a></strong>";
              ?>

            </div>
          </div>

        <?php
      }


    ?>

  
   



</div><!--end div for content col-lg-8 col-->

<div class="col-lg-3">

  <div style='display:inline-block;float:right;'><script type="text/javascript" src="http://100widgets.com/js_data.php?id=276"></script></div>

</div>

</div><!--end of row for-->



</div><!--end col lg 8 offset 2--><!--end partner Page div-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>