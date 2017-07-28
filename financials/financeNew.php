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


<h1>New Financial Braekdown</h1>


</div>
</div>

<div class="row">
<div class="col-lg-8" style='margin-left:5%;'>

<h2>Fill Out The Below Form With Estimated Finances</h2>

<p>Changes can be made later. If there is no fee/charge, enter 0.</p>

<form name='addNewFinance' class="form-horizontal" enctype="multipart/form-data" method="post" action="">

<div id='eventInfoForm'>

<h3>Event Information</h3>

  <div>
  <label class="control-label" for="eventIDFinance">Event ID: </label>
  <input class="form-control" id="eventIDFinance" type="text" name="eventIDFinance"/>
  </div>

  <div>
  <label class="control-label" for="eventNameFinanace">Event Name: </label>
  <input class="form-control" id="eventNameFinanace" type="text" name="eventNameFinanace"/>
  </div>

  <div>
  <label class="control-label" for="eventDateFinance">Event Date: </label>
  <input class="form-control" id="eventDateFinance" type="text" name="eventDateFinance"/>
  </div>

</div>

<div id='doorPriceForm'>

  <h3>Door Prices</h3>

  <div>
  <label class="control-label" for="priceOne">Price 1: </label>
  <input class="form-control" id="priceOne" type="text" name="priceOne"/>
  </div>

  <div>
  <label class="control-label" for="priceTwo">Price 2: </label>
  <input class="form-control" id="priceTwo" type="text" name="priceTwo"/>
  </div>

  <div>
  <label class="control-label" for="priceThree">Price 3: </label>
  <input class="form-control" id="priceThree" type="text" name="priceThree"/>
  </div>

</div>


<div id='internationalForm'>

  <h3>International Costs</h3>

  <div>
  <label class="control-label" for="INTLFlight">Flight: </label>
  <input class="form-control" id="INTLFlight" type="text" name="INTLFlight"/>
  </div>

  <div>
  <label class="control-label" for="INTLHotel">Hotel: </label>
  <input class="form-control" id="INTLHotel" type="text" name="INTLHotel"/>
  </div>

  <div>
  <label class="control-label" for="INTLFood">Food: </label>
  <input class="form-control" id="INTLFood" type="text" name="INTLFood"/>
  </div>

  <div>
  <label class="control-label" for="INTLTransit">Internal Transit: </label>
  <input class="form-control" id="INTLTransit" type="text" name="INTLTransit"/>
  </div>

    <div>
  <label class="control-label" for="INTLPay">Pay: </label>
  <input class="form-control" id="INTLPay" type="text" name="INTLPay"/>
  </div>

    <div>
  <label class="control-label" for="INTLBookingFee">Booking Fee: </label>
  <input class="form-control" id="INTLBookingFee" type="text" name="INTLBookingFee"/>
  </div>

  <div>
  <label class="control-label" for="INTLExtra">Extras: </label>
  <input class="form-control" id="INTLExtra" type="text" name="INTLExtra"/>
  </div>

</div>


<div id='DJsForm'>

  <h3>DJ Costs</h3>

  <div>
  <label class="control-label" for="DJ1Name">DJ 1 Name: </label>
  <input class="form-control" id="DJ1Name" type="text" name="DJ1Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ1Pay">DJ 1 Pay: </label>
  <input class="form-control" id="DJ1Pay" type="text" name="DJ1Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ2Name">DJ 2 Name: </label>
  <input class="form-control" id="DJ2Name" type="text" name="DJ2Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ2Pay">DJ 2 Pay: </label>
  <input class="form-control" id="DJ2Pay" type="text" name="DJ2Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ3Name">DJ 3 Name: </label>
  <input class="form-control" id="DJ3Name" type="text" name="DJ3Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ3Pay">DJ 3 Pay: </label>
  <input class="form-control" id="DJ3Pay" type="text" name="DJ3Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ4Name">DJ 4 Name: </label>
  <input class="form-control" id="DJ4Name" type="text" name="DJ4Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ4Pay">DJ 4 Pay: </label>
  <input class="form-control" id="DJ4Pay" type="text" name="DJ4Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ5Name">DJ 5 Name: </label>
  <input class="form-control" id="DJ5Name" type="text" name="DJ5Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ5Pay">DJ 5 Pay: </label>
  <input class="form-control" id="DJ5Pay" type="text" name="DJ5Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ6Name">DJ 6 Name: </label>
  <input class="form-control" id="DJ6Name" type="text" name="DJ6Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ6Pay">DJ 6 Pay: </label>
  <input class="form-control" id="DJ6Pay" type="text" name="DJ6Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ7Name">DJ 7 Name: </label>
  <input class="form-control" id="DJ7Name" type="text" name="DJ7Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ7Pay">DJ 7 Pay: </label>
  <input class="form-control" id="DJ7Pay" type="text" name="DJ7Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ8Name">DJ 8 Name: </label>
  <input class="form-control" id="DJ8Name" type="text" name="DJ8Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ8Pay">DJ 8 Pay: </label>
  <input class="form-control" id="DJ8Pay" type="text" name="DJ8Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ9Name">DJ 9 Name: </label>
  <input class="form-control" id="DJ9Name" type="text" name="DJ9Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ9Pay">DJ 9 Pay: </label>
  <input class="form-control" id="DJ9Pay" type="text" name="DJ9Pay"/>
  </div>

    <div>
  <label class="control-label" for="DJ10Name">DJ 10 Name: </label>
  <input class="form-control" id="DJ10Name" type="text" name="DJ10Name"/>
  </div>

  <div>
  <label class="control-label" for="DJ10Pay">DJ 10 Pay: </label>
  <input class="form-control" id="DJ10Pay" type="text" name="DJ10Pay"/>
  </div>

</div>

<div id='PromosForm'>

  <h3>Promoter</h3>

  <div>
  <label class="control-label" for="Promoter1Name">Promoter 1 Name: </label>
  <input class="form-control" id="Promoter1Name" type="text" name="Promoter1Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter1Pay">Promoter 1 Pay: </label>
  <input class="form-control" id="Promoter1Pay" type="text" name="Promoter1Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter2Name">Promoter 2 Name: </label>
  <input class="form-control" id="Promoter2Name" type="text" name="Promoter2Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter2Pay">Promoter 2 Pay: </label>
  <input class="form-control" id="Promoter2Pay" type="text" name="Promoter2Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter3Name">Promoter 3 Name: </label>
  <input class="form-control" id="Promoter3Name" type="text" name="Promoter3Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter3Pay">Promoter 3 Pay: </label>
  <input class="form-control" id="Promoter3Pay" type="text" name="Promoter3Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter4Name">Promoter 4 Name: </label>
  <input class="form-control" id="Promoter4Name" type="text" name="Promoter4Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter4Pay">Promoter 4 Pay: </label>
  <input class="form-control" id="Promoter4Pay" type="text" name="Promoter4Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter5Name">Promoter 5 Name: </label>
  <input class="form-control" id="Promoter5Name" type="text" name="Promoter5Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter5Pay">Promoter 5 Pay: </label>
  <input class="form-control" id="Promoter5Pay" type="text" name="Promoter5Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter6Name">Promoter 6 Name: </label>
  <input class="form-control" id="Promoter6Name" type="text" name="Promoter6Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter6Pay">Promoter 6 Pay: </label>
  <input class="form-control" id="Promoter6Pay" type="text" name="Promoter6Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter7Name">Promoter 7 Name: </label>
  <input class="form-control" id="Promoter7Name" type="text" name="Promoter7Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter7Pay">Promoter 7 Pay: </label>
  <input class="form-control" id="Promoter7Pay" type="text" name="Promoter7Pay"/>
  </div>

    <div>
  <label class="control-label" for="Promoter8Name">Promoter 8 Name: </label>
  <input class="form-control" id="Promoter8Name" type="text" name="Promoter8Name"/>
  </div>

  <div>
  <label class="control-label" for="Promoter8Pay">Promoter 8 Pay: </label>
  <input class="form-control" id="Promoter8Pay" type="text" name="Promoter8Pay"/>
  </div>

</div>

<div id='extrasForm'>

  <h3>Extras</h3>

  <div>
  <label class="control-label" for="assistantPay">Assistant: </label>
  <input class="form-control" id="assistantPay" type="text" name="assistantPay"/>
  </div>

  <div>
  <label class="control-label" for="doorperson">Doorperson: </label>
  <input class="form-control" id="doorperson" type="text" name="doorperson"/>
  </div>

  <div>
  <label class="control-label" for="security">Security: </label>
  <input class="form-control" id="security" type="text" name="security"/>
  </div>

  <div>
  <label class="control-label" for="decos">Decorations: </label>
  <input class="form-control" id="decos" type="text" name="decos"/>
  </div>

  <div>
  <label class="control-label" for="visuals">Visuals: </label>
  <input class="form-control" id="visuals" type="text" name="visuals"/>
  </div>

  <div>
  <label class="control-label" for="photographer">Photographer: </label>
  <input class="form-control" id="photographer" type="text" name="photographer"/>
  </div>

  <div>
  <label class="control-label" for="flyerDesign">Flyer Design: </label>
  <input class="form-control" id="flyerDesign" type="text" name="flyerDesign"/>
  </div>

  <div>
  <label class="control-label" for="flyerPrinting">Flyer Printing: </label>
  <input class="form-control" id="flyerPrinting" type="text" name="flyerPrinting"/>
  </div>

  <div>
  <label class="control-label" for="extraCosts1">Extra Costs 1: </label>
  <input class="form-control" id="extraCosts1" type="text" name="extraCosts1"/>
  </div>

  <div>
  <label class="control-label" for="extraCosts2">Extra Costs 2: </label>
  <input class="form-control" id="extraCosts2" type="text" name="extraCosts2"/>
  </div>


</div>

<input class="btn btn-primary" type="submit" value="Submit Fincancials Budget" name="formFinanceBudget" id="formFinanceBudget" />


</form>


<div id="formFinanceBudgetDiv">

    <?php

    //on submission of form
    if(isset($_POST["formFinanceBudget"]))
    {
        //database connection
    $conn1 = new Dbconnect;
    $db1 = $conn1->getDb();

        //$val = new Validate();
          
    $eventID = $_POST['eventIDFinance'];
    $eventName = $_POST['eventNameFinanace'];
    $eventDate = $_POST['eventDateFinance'];
    
    $discountPrice1 = $_POST['priceOne'];
    $discountPrice2 = $_POST['priceTwo'];
    $discountPrice3 = $_POST['priceThree'];

    $INTLFlight = $_POST['INTLFlight'];
    $INTLHotel = $_POST['INTLHotel'];
    $INTLFood = $_POST['INTLFood'];
    $INTLTransit = $_POST['INTLTransit'];
    $INTLPay = $_POST['INTLPay'];
    $INTLBookingFee = $_POST['INTLBookingFee'];
    $INTLExtra = $_POST['INTLExtra'];

    $DJ1 = $_POST['DJ1Name'];
    $DJ1Pay = $_POST['DJ1Pay'];
    $DJ2 = $_POST['DJ2Name'];
    $DJ2Pay = $_POST['DJ2Pay'];
    $DJ3 = $_POST['DJ3Name'];
    $DJ3Pay = $_POST['DJ3Pay'];
    $DJ4 = $_POST['DJ4Name'];
    $DJ4Pay = $_POST['DJ4Pay'];
    $DJ5 = $_POST['DJ5Name'];
    $DJ5Pay = $_POST['DJ5Pay'];
    $DJ6 = $_POST['DJ6Name'];
    $DJ6Pay = $_POST['DJ6Pay'];
    $DJ7 = $_POST['DJ7Name'];
    $DJ7Pay = $_POST['DJ7Pay'];
    $DJ8 = $_POST['DJ8Name'];
    $DJ8Pay = $_POST['DJ8Pay'];
    $DJ9 = $_POST['DJ9Name'];
    $DJ9Pay = $_POST['DJ9Pay'];
    $DJ0 = $_POST['DJ0Name'];
    $DJ0Pay = $_POST['DJ0Pay'];

    $promo1 = $_POST['Promoter1Name'];
    $promo1Pay = $_POST['Promoter1Pay'];
    $promo2 = $_POST['Promoter2Name'];
    $promo2Pay = $_POST['Promoter2Pay'];
    $promo3 = $_POST['Promoter3Name'];
    $promo3Pay = $_POST['Promoter3Pay'];
    $promo4 = $_POST['Promoter4Name'];
    $promo4Pay = $_POST['Promoter4Pay'];
    $promo5 = $_POST['Promoter5Name'];
    $promo5Pay = $_POST['Promoter5Pay'];
    $promo6 = $_POST['Promoter6Name'];
    $promo6Pay = $_POST['Promoter6Pay'];
    $promo7 = $_POST['Promoter7Name'];
    $promo7Pay = $_POST['Promoter7Pay'];
    $promo8 = $_POST['Promoter8Name'];
    $promo8Pay = $_POST['Promoter8Pay'];

    $assistantPay = $_POST['assistantPay'];
    $doorperson = $_POST['doorperson'];
    $security = $_POST['security'];
    $decorations = $_POST['decos'];
    $visuals = $_POST['visuals'];
    $photographer = $_POST['photographer'];
    $flyerDesign = $_POST['flyerDesign'];
    $flyerPrinting = $_POST['flyerPrinting'];
    $extraCosts1 = $_POST['extraCosts1'];
    $extraCosts2 = $_POST['extraCosts2'];

    $query = "INSERT INTO financials (eventName, eventDate, INTLFlight, INTLHotel, INTLFood, INTLTransit, INTLPay, INTLBookingFee, INTLExtra, DJ1, DJ2, DJ3, DJ4, DJ5, DJ6, DJ7, DJ8, DJ9, DJ0, DJ1Pay, DJ2Pay, DJ3Pay, DJ4Pay, DJ5Pay, DJ6Pay, DJ7Pay, DJ8Pay, DJ9Pay, DJ0Pay, promo1, promo2, promo3, promo4, promo5, promo6, promo7, promo8, promo1Pay, promo2Pay, promo3Pay, promo4Pay, promo5Pay, promo6Pay, promo7Pay, promo8pay, assistantPay, doorperson, security, decorations, visuals, photographer, flyerDesign, flyerPrinting, extraCosts1, extraCosts2) VALUES (:eventName, :eventDate, :INTLFlight, :INTLHotel, :INTLFood, :INTLTransit, :INTLPay, :INTLBookingFee, :INTLExtra, :DJ1, :DJ2, :DJ3, :DJ4, :DJ5, :DJ6, :DJ7, :DJ8, :DJ9, :DJ0, :DJ1Pay, :DJ2Pay, :DJ3Pay, :DJ4Pay, :DJ5Pay, :DJ6Pay, :DJ7Pay, :DJ8Pay, :DJ9Pay, :DJ0Pay, :promo1, :promo2, :promo3, :promo4, :promo5, :promo6, :promo7, :promo8, :promo1Pay, :promo2Pay, :promo3Pay, :promo4Pay, :promo5Pay, :promo6Pay, :promo7Pay, :promo8pay, :assistantPay, :doorperson, :security, :decorations, :visuals, :photographer, :flyerDesign, :flyerPrinting, :extraCosts1, :extraCosts2)";


      $statement1 = $db1->prepare($query1);

   

      $statement1->bindValue(':eventName', $eventName, PDO::PARAM_STR);
      $statement1->bindValue(':eventDate', $eventDate, PDO::PARAM_STR);
      $statement1->bindValue(':INTLFlight', $INTLFlight, PDO::PARAM_STR);
      $statement1->bindValue(':INTLHotel', $INTLHotel, PDO::PARAM_STR);
      $statement1->bindValue(':INTLFood', $INTLFood, PDO::PARAM_STR);
      $statement1->bindValue(':INTLTransit', $INTLTransit, PDO::PARAM_STR);
      $statement1->bindValue(':INTLPay', $INTLPay, PDO::PARAM_STR);
      $statement1->bindValue(':INTLBookingFee', $INTLBookingFee, PDO::PARAM_STR);
      $statement1->bindValue(':INTLExtra', $INTLExtra, PDO::PARAM_STR);
      $statement1->bindValue(':DJ1', $DJ1, PDO::PARAM_STR);
      $statement1->bindValue(':DJ2', $DJ2, PDO::PARAM_STR);
      $statement1->bindValue(':DJ3', $DJ3, PDO::PARAM_STR);
      $statement1->bindValue(':DJ4', $DJ4, PDO::PARAM_STR);
      $statement1->bindValue(':DJ5', $DJ5, PDO::PARAM_STR);
      $statement1->bindValue(':DJ6', $DJ6, PDO::PARAM_STR);
      $statement1->bindValue(':DJ7', $DJ7, PDO::PARAM_STR);
      $statement1->bindValue(':DJ8', $DJ8, PDO::PARAM_STR);
      $statement1->bindValue(':DJ9', $DJ9, PDO::PARAM_STR);
      $statement1->bindValue(':DJ0', $DJ0, PDO::PARAM_STR);
      $statement1->bindValue(':DJ1Pay', $DJ1Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ2Pay', $DJ2Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ3Pay', $DJ3Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ4Pay', $DJ4Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ5Pay', $DJ5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ6Pay', $DJ6Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ7Pay', $DJ7Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ8Pay', $DJ8Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ9Pay', $DJ9Pay, PDO::PARAM_STR);
      $statement1->bindValue(':DJ0Pay', $DJ0Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo1', $promo1, PDO::PARAM_STR);
      $statement1->bindValue(':promo2', $promo2, PDO::PARAM_STR);
      $statement1->bindValue(':promo3', $promo3, PDO::PARAM_STR);     
      $statement1->bindValue(':promo4', $promo4, PDO::PARAM_STR);
      $statement1->bindValue(':promo5', $promo5, PDO::PARAM_STR);
      $statement1->bindValue(':promo6', $promo6, PDO::PARAM_STR);
      $statement1->bindValue(':promo7', $promo7, PDO::PARAM_STR);
      $statement1->bindValue(':promo8', $promo8, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':promo5Pay', $promo5Pay, PDO::PARAM_STR);
      $statement1->bindValue(':assistantPay', $assistantPay, PDO::PARAM_STR);
      $statement1->bindValue(':doorperson', $doorperson, PDO::PARAM_STR);
      $statement1->bindValue(':security', $security, PDO::PARAM_STR);
      $statement1->bindValue(':decorations', $decorations, PDO::PARAM_STR);
      $statement1->bindValue(':visuals', $visuals, PDO::PARAM_STR);
      $statement1->bindValue(':photographer', $photographer, PDO::PARAM_STR);
      $statement1->bindValue(':flyerDesign', $flyerDesign, PDO::PARAM_STR);
      $statement1->bindValue(':flyerPrinting', $flyerPrinting, PDO::PARAM_STR);
      $statement1->bindValue(':extraCosts1', $extraCosts1, PDO::PARAM_STR);
      $statement1->bindValue(':extraCosts2', $extraCosts2, PDO::PARAM_STR);

      $statement1->execute();

      echo "budged added";

      $conn1=null;


   }
   ?>


   
</div>
   



</div><!--end div for content col-lg-8 col-->



</div><!--end of row for-->



</div><!--end col lg 8 offset 2--><!--end partner Page div-->

</div><!--end row-->

</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>