<?php
include 'header.php';
include 'head.php';
include 'adminNav.php';
?>


<!--<script type='text/javascript' src="testLoginScript.js"></script>-->

     
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Next Event) -->
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-purple" style='font-color:black;'>
            <div class="inner">
              
              <h4 style='padding-bottom:15px;'>Social Media</h4>

                <div><a target='_blank' href='https://www.facebook.com/pointentertainmenttoronto/'><img src='images/facebook.jpg' style='width:7%;margin-right:7%;'></a>
                <a target='_blank' href='https://www.instagram.com/pointentto/'><img src='images/instagram.png' style='width:7%;margin-right:7%;'></a>
                <a target='_blank' href='https://twitter.com/pointEntTO'><img src='images/twitter.jpg' style='width:7%;'></a></div>

              <h4 style='padding-bottom:10px;padding-top:20px;'>Public Page</h4>

              <p><a target='_blank' href='www.pointentertainmentto.com'>Website</a></p>

            </div>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div> <!--endnextEvent-->
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h4>Previous Events</h4>
              <br/>
               <?php

                  $dbconn = new Dbconnect;
                  $db = $dbconn->getDb();
                  $query = "SELECT * FROM event WHERE status='previous' ORDER BY date DESC LIMIT 3";
                  $statement = $db->prepare($query);
                  $statement->execute();
                  $prevEvents = $statement->fetchAll(PDO::FETCH_OBJ);
              ?>

              <table>
              <tr>
                <th>ID</th>
                <th style='padding-left:2%;'>Name</th>
                <th style='padding-left:2%;width:30%;'>Date</th>
                <th style='padding-left:2%;width:22%;'>Venue</th>
                <th style='padding-left:2%;'>Link</th>
              </tr>

                <?php
                  foreach($prevEvents as $s)
                  {
                    echo "<tr>";
                    echo "<td>" . $s->id . "</td>";
                    echo "<td style='padding-left:2%;'>" . $s->name . "</td>";
                    echo "<td style='padding-left:2%;width:30%;'>" . $s->date . "</td>";
                    echo "<td style='padding-left:2%;width:22%;'>" . $s->venue . "</td>";
                    echo "<td style='padding-left:2%;'><a target='_blank' href='" . $s->facebookURL . "'>Link</a></td>";
                    echo "</tr>";
                  }
                ?>

                </table>
                <br/>

                <p>All events listed <a href='eventsAll.php'>here</a>.</p>

            </div><!--end inner div-->
          </div><!--end small-box-->
        </div><!-- ./col lg 6 -->
        
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class='row'>
        <div class='col-lg-12 bg-grey'>
        <div style='width:100%;border:3px solid purple;border-radius:25px;text-align:center;font-size:1.5em;'>Make sure you update your <a href='GLAddToGuestlist.php'>guestlist</a>.</p>
        </div>
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable" bg-black">
        <div class="box box-solid bg-black" style='font-color:white;vertical-align:top;margin-left:2%;height:350px;'>

        <h2 style='margin-bottom:0px;padding-top:10px;margin-left:30%;'>Next Event</h2>
            

            <div class='col-lg-6 bg-black' style='padding-top:10px;'><!--left side-->

              

            <?php

                  $dbconn = new Dbconnect;
                  $db = $dbconn->getDb();
                  $query = "SELECT * FROM event WHERE status='future' ORDER BY date ASC LIMIT 1";
                  $statement = $db->prepare($query);
                  $statement->execute();
                  $nextEvent = $statement->fetchAll(PDO::FETCH_OBJ);
              ?>

                  <?php
                    foreach($nextEvent as $p)
                    {
                      echo "<h4>" . $p->name . "</h4>";
                      echo "<p>" . $p->date . "</p>";
                      echo "<p>Location: " . $p->venue . "</p>";
                      echo "<p>Cover: " . $p->cover . "</p>";
                      echo "<p>" . $p->description . "</p>";
                      



              echo "</div>";//<!--end left side div-->

              echo "<div class='col-lg-6 bg-black'>";//<!--right side-->
              echo "<br/>";
               echo "<p><a href='" . $p->facebookURL . "' target='_blank'>" . "Facebook Event" . "</p>";
               echo "<br/>";
                      echo "<p><a href='GLAddToGuestlist.php'>Add To Guestlist</a></p>";
                       
              echo "<br/>";
              echo "<div><img src='eventPicViewerImg.php?id=" . $p->id . "' style='width:100%;display:inline-block;'></div>";
              echo "<br/>";
              echo "<br/>";
              echo "<br/>";
              echo "<br/>";                                  }
              echo "<br/>";
              echo "<br/>";
              echo "<br/>";
              echo "<br/>";

                  ?>

              </div><!--end right side div-->

     


        </div>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-4 connectedSortable">

          <!-- Upcoming Events -->
          <div class="box box-solid bg-purple" style='vertical-align:top;margin-top:20px;margin-left:5%;padding-right:20%;'>
            <div class="box-header">
              <h2 style='font-color:white;padding-bottom:20px;'>Upcoming Events</h2>              

                <?php

                  $dbconn = new Dbconnect;
                  $db = $dbconn->getDb();
                  $query = "SELECT * FROM event WHERE status='future' ORDER BY date ASC";
                  $statement = $db->prepare($query);
                  $statement->execute();
                  $newEvents = $statement->fetchAll(PDO::FETCH_OBJ);
               ?>

              <div>
                <table>
                  <tr>
                  <th style='width:50%;'>Event</th>
                  <th style='width:50%;'>Date</th>
                  <th style='width:50%;'>Link</th>
                  </tr>

                  <?php
                    foreach($newEvents as $p)
                    {
                      echo "<tr>";
                      echo "<td style='width:50%;'>" . $p->name . "</td>";
                      echo "<td style='width:50%;'>" . $p->date . "</td>";
                      echo "<td style='width:50%;'><a href='" . $p->facebookURL . "' target='_blank'>" . "Link" . "</a></td>";
                      echo "</tr>";
                    }

                  ?>

                </table>
              </div>
            
              <br/>
              <br/>
            </div>
            <!-- /.box-header -->

 
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  
</section>
</div>

        



<?php

include 'footer.php';

?>