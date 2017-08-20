<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<!--Facebook SDK JS for PointAnalytics-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '328402550917817',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>




<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="row">

    <div class="col-lg-10" id='pagesUpdateTemp' style='margin-left:5%;'>

    <h1>Social Media</h1>

    </div>
  </div>

  <div class="row">


    <div class="col-lg-10 col-lg-offset-1" style='margin-left:5%;'>

<div class='col-lg-4'>
<h2>Twitter</h2>

<h3>Tracking #pointentertainment</h3>
<div class="hastagify_embed" data-hashtag="pointentertainment" data-width="250" data-mode="table"><div>hashtags data by <a href="http://hashtagify.me/">hashtagify.me</a></div></div><script src="//hashtagify.me/assets/hashtagify/embed.js" type="text/javascript"></script>

<h3>Comparing #pointentertainment, #pointentertainmentto, #pointentto, #pointent</h3>

<div class="hastagify_embed" data-hashtag="pointentertainment,pointentertainmentto,pointentto,pointent" data-width="250" data-mode="trend-comparison"><div>hashtags data by <a href="http://hashtagify.me/">hashtagify.me</a></div></div><script src="//hashtagify.me/assets/hashtagify/embed.js" type="text/javascript"></script>



</div>



<div class='col-lg-4'>
<h2>Facebook</h2>

<a href='https://www.facebook.com/analytics/732495113473393/?section=dashboards&view=DETAILS&dashboard_id=1551708308218732&since=1501891200000&until=1503014400000&range_type=LAST_14_DAYS' target='_blank'>Last 14 days</a>


</div>


<div class='col-lg-4'>
<h2>Instagram</h2>
<p>not much here yet</p>


</div>
</div>



    </div> <!--end col-lg-10 div -->
  </div><!--end row div-->










</div> <!--end content wrapper-->





<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','ny09q');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->


<?php

include 'footer.php';

?>