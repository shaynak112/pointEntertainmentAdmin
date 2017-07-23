   

<?php



include 'header.php';
include 'head.php';
include 'adminNav.php';

?>


<script type='text/javascript' src="testLoginScript.js"></script>

     
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
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              
              <h3>Next Event</h3>

                <?php

                  $dbconn = new Dbconnect;
                  $db = $dbconn->getDb();
                  $query = "SELECT * FROM event WHERE status='future' ORDER BY date DESC LIMIT 1";
                  $statement = $db->prepare($query);
                  $statement->execute();
                  $nextEvent = $statement->fetchAll(PDO::FETCH_OBJ);
              ?>

              <div>

                  <?php
                    foreach($nextEvent as $p)
                    {
                      echo "<p>" . $p->name . "</p>";
                      echo "<p>" . $p->date . "</p>";
                      echo "<p><a href='" . $p->facebookURL . "' target='_blank'>" . "Facebook Event" . "</p>";
                      echo "<a href='GLAddToGuestlists.php'>Add To Guestlists</p>";

                    }

                  ?>

              </div>

            </div>
            <!--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
          </div>
        </div> <!--endnextEvent-->
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red"'>
            <div class="inner">
              <h3>Facebook Update</h3>

              <p>New Likes</p>
              <p><a href="#">Facebook Page</a></p>
              <p>Get info from API</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h3>Approvals</h3>

              <p>Add User</p>
              <p>Photo Approvals</p>
              <p>Comment Approvals</p>
            </div>

          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->

            <h2>Pages</h2>

            <ul>
            <li>Events</li>
              <ul>
              <li style='color:blue;'>Add Events - issues with adding events, need to fix. Also with "Upcoming Events", need to update status to "previous" right away and also include guest lists under "More Info"</li>
              <li>Update Event - does not work yet</li>
              <li style='color:red;'>All Events - does show  a list of all events; only thing that needs to be added is "more info" adding the guest list, same as above</li>
              </ul>
            <li style='color:red;'>Guestlists - temporarily works for the 15th but, after the 15th, I'll make sure it works going forward based on date (just don't want to mess it up now). Note: haven't worked on this since</li>
            <ul>
            <li style='color:red;'>Financial Summary - complete</li>
            <li>Financials - Adding New (not ready, error with form)</li>
            <li>Financials - Update (not ready)</li>
            </ul>
            <li>Gallery - not ready</li>
            <li style='color:red;'>Venues - works</li>
            <li style='color:red;'>Partners - works</li>
            <li>Other Events - doesn't work</li>
            <li style='color:red;'>Subscribers - works</li>
            <li>Social Media - doesn't work</li>
            <li style='color:red;'>Accounts - lists accounts of people who can log in once log in works fine, deactivated will be listed last. these are all just tests of course</li>
            <li>Admin Ideas - doesn't work</li>
            <li>Calendar - doesn't work</li>
            <li style='color:red;'>Mailbox - will open in new tab for you to log in</li>
            <li style='color:red;'>Contact Info - works but need more info</li>


            </ul>

            <h2>Homepage</h2>

            <ul>
            <li>Not 100% sure what to put here</li>
            <li style='color:blue;'>Next event in top left; will include image</li>
            <li>Middle, some sort of social media update with followers/likes or something like that</li>
            <li>Still thinking on third one, could reduce to two</li>
            <li>will focus on social media and upcoming events on homepage I think</li>
            </ul>

           

          </div>
          <!-- /.nav-tabs-custom -->


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

         

          <!-- Upcoming Events -->
          <div class="box box-solid bg-black">
            <div class="box-header">
              <h2 style='font-color:white;padding-bottom:20px;'>Upcoming Events</h2>              

                <?php

                  $dbconn = new Dbconnect;
                  $db = $dbconn->getDb();
                  $query = "SELECT * FROM event WHERE status='future' ORDER BY date DESC";
                  $statement = $db->prepare($query);
                  $statement->execute();
                  $newEvents = $statement->fetchAll(PDO::FETCH_OBJ);
              ?>

              <div>
                <table>
                  <tr>
                  <th>Event</th>
                  <th style='padding-left:15%;'>Date</th>
                  <th style='padding-left:15%;'>URL</th>
                  </tr>

                  <?php
                    foreach($newEvents as $p)
                    {
                      echo "<tr>";
                      echo "<td>" . $p->name . "</td>";
                      echo "<td style='padding-left:15%;'>" . $p->date . "</td>";
                      echo "<td style='padding-left:15%;'><a href='" . $p->facebookURL . "' target='_blank'>" . "Link" . "</td>";
                      echo "</tr>";
                    }

                  ?>

                </table>
              </div>
            

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
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<?php

include 'footer.php';

?>

