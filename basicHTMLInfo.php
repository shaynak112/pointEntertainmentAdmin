<?php

include 'header.php';
include 'head.php';
include 'adminNav.php';

?>

<script type='text/javascript' src="testLoginScript.js"></script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="row">

    <div class="col-lg-10" id='pagesUpdateTemp' style='margin-left:5%;'>

    <h1>Basic HTML Resource</h1>

    </div>
  </div>

  <div class="row">


    <div class="col-lg-10 col-lg-offset-1" style='margin-left:5%;'>

    <div>This is just a quick resource for when you are updating anything that is more than just a line or a word (basically, anything that is multiple paragraphs OR has special characters. This could be used on pages/sections such as</div>

    <ul>
      <li>Events - Add Event - Description</li>
      <li>Newsletters - General Update</li>
      <li>Anywhere that you are updating a lot of text</li>
    </ul>

    <h2>Basic Reference</h2>

    <p>A great general reference is <a href="https://www.w3schools.com/html/html_entities.asp" target="_blank">W3 Schools Entitites</a></p>

    <ul>
      <li>&lt;br/&gt; is basically a new line. You will often use two of them to have a space between text blocks.</li>
      <li>&lt;div&gt; and &lt;/div&gt; with text enclosed between the divs is a just to represent the block of text that goes together similar to a paragraph (p may be used instead of div)</li>
      <li>&lt;strong&gt; and &lt;/strong&gt; will bold the text between those words</li>
      <li>if you'd like to include a link, follow this format so the link goes onto a new tab (so if they exit that link, they come back to our site) &lt;a href='URL GOES HERE' target='_blank'&gt;REPEAT URL OR TEXT YOU WANT TO SHOW &lt;/a&gt;</li>
    </ul>

    <p>Some symbols need special codes to show up. I would suggest checking any of these links:

    <ul>
      <li><a href='https://www.w3schools.com/html/html_symbols.asp' target='_blank'>General Symbols</a></li>
      <li><a href='https://www.w3schools.com/html/html_entities.asp' target='_blank'>General Entities</a></li>
      <li><a href='https://www.w3schools.com/charsets/ref_utf_symbols.asp' target='_blank'>Misc Symbols</a></li>
      <li><a href='https://www.w3schools.com/charsets/ref_utf_math.asp' target='_blank'>Math Symbols</a></li>
      <li><a href='https://www.w3schools.com/charsets/ref_utf_geometric.asp' target='_blank'>Geometric Symbols</a></li>
      <li><a href='https://www.w3schools.com/charsets/ref_utf_currency.asp' target='_blank'>Currency Symbols</a></li>
      <li><a href='https://www.w3schools.com/charsets/ref_utf_arrows.asp' target='_blank'>Arrows</a></li>

    </ul>


    </div> <!--end col-lg-10 div -->
  </div><!--end row div-->










</div> <!--end content wrapper-->

<?php

include 'footer.php';

?>