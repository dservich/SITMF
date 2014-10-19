<?php
require_once('includes/header.inc.php');
?>

<!-- This row is our title bar -->
<div class = "row">
  <div class = "large-12 columns">
    <p align = "center" style="font-family:impact;
     border-style:solid; border-color:black; background-color:6C7B8B">
 <font color="#FF8000" size="26">
      <b><i>Say It To My Face</b></i></font> 
    <br>
    <font color="#FF0000" size="15">
      <small>
      <b><i>Where Your Opinion Is Heard</i></b></font>
    </small>
  </p>
        
      
  </div>
</div>

<!-- This row is our navigation bar. -->
<div class="row" >
    <div class="large-3 columns">
      <h1><a href="index.php"/><img src="favicon.png" alt="logo"></a>
      </h1>
    </div>
    <div class="large-9 columns">
      <ul class="inline-list right" >
        <li ><a href="about.php">About SITMF</a></li>
        <li ><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>

  











<!-- add webview here -->

 <div class="row">
    <div class="large-12 columns">
    <?php echo $_GET['link'];?>
      <iframe src="<?php echo $_GET['link'];?>" style="width:1000px; height:800px;"></iframe>
    <hr/>
    </div>
  </div>


  <!-- end webview -->

 
      <div class="row">
 
   
 
       
 
     
 
 
     
 
        <div class="large-12 columns">
          <div class="row">
 
            <div class="large-4 small-6 columns">
              <ziggeo ziggeo-height = 300 ziggeo-width = 300></ziggeo>
 
              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
 
            <div class="large-4 small-6 columns">
              <ziggeo ziggeo-video = 368ac8741bee504d9d9c801352ff3992
                      ziggeo-height = 300 ziggeo-width = 300></ziggeo>
 
              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
 
            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">
 
              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
 
            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">
 
              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
 
            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">
 
              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
 
            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">
 
              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
          </div>
 
     
 
 
     
          
        </div>
      </div>
 









<?php
require_once('includes/footer.inc.php');
?>