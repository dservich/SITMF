<?php
require_once('includes/header.inc.php');
?>

<!-- This row is our title bar -->
<div class = "row">
	<div class = "large-12 columns">
    <p align = "center" style="font-family:impact;
     border-style:solid; border-color:black; background-color:#FFFF75" >
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
      <h1><img src="favicon.png"/></h1>
    </div>
    <div class="large-9 columns">
      <ul class="inline-list right" >
        <li ><a href="about.php">About SITMF</a></li>
        <li ><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
  
   <br>
  
  <!-- This begins our body -->
  <div class="row">    
    
     
     
    <div class="large-12 columns">
      

      
      
  <div class="row">
    <div class="large-12 columns">
 
     
  <!-- --------------------------

  This is the top row of the body 

  ---------------------------- -->

      <div class="row">
   		<div class="large-12 columns">
      <div class="row">
 
     
 
        <div class="large-3 small-6 columns" id = "WorldThumbnail">
        	<?php
  	 			$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/World/24.json?limit=1&offset=0&api-key=2cf1abc4b8adb0ad4a723a3b6e666c2a%3A2%3A70025254+');
  	 			$obj = json_decode($json, true);
  	 	
  	 			$article = $obj['results'][0];
  	 			$url = $article['url'];
	    	?>
  	 		
  	 		<a href="<?php  echo $url?>"><img src="world.png"/></a>
  			
  			<?php

  			?>

          
          <h6 class="panel"><a href = "section.php?section=World">Click here for more news in World</a></h6>
        </div>
 
        <div class="large-3 small-6 columns" id = "SportsThumbnail">
          <img src="http://placehold.it/250x250&text=Thumbnail-2"/>
          <h6 class="panel"><a href = "#">Click here for more news in Sports</a></h6>
        </div>
 
        <div class="large-3 small-6 columns" id = "BusinessThumbnail">
          <img src="http://placehold.it/250x250&text=Thumbnail-3"/>
          <h6 class="panel"><a href = "#">Click here for more news in Business</a></h6>
        </div>
 
        <div class="large-3 small-6 columns" id = "">
          <img src="http://placehold.it/250x250&text=Thumbnail-4"/>
          <h6 class="panel"><a href = "#">Click for more news in Movies</a></h6>
        </div>
 
     
 
      </div>
    </div>
  </div>
 
 
     
 
 
     
 
 
    <div class="row">
      <div class="small-12 show-for-small"><br>
        <img src="http://placehold.it/1000x600&text=For Small Screens"/>
      </div>
    </div>
 
 
   
 
    </div>
  </div><br>
 

 <!-- ----------------------------

 This is the second row of the body 

 -------------------------------- -->
  <div class="row">
    <div class="large-12 columns">
      <div class="row">
 
     
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail"/>
          <h6 class="panel"><a href = "#">Click here for more news in Politics</h6>
        </div>
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail"/>
          <h6 class="panel"><a href = "#">Click here for more news in Science </h6>
        </div>
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail"/>
          <h6 class="panel"><a href = "#">Click here for more news in Technology</h6>
        </div>
 
        <div class="large-3 small-6 columns">
          <img src="http://placehold.it/250x250&text=Thumbnail"/>
          <h6 class="panel"><a href = "#">Click here for more news in Health</h6>
        </div>
 
     
 
      </div>
    </div>
  </div>
 
 
 
    
    </div>
    
    
     
     
    
    
  </div>

<!-- Practice -->



  <div class = "row">
  	 <?php
  	 	$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/World/24.json?limit=1&offset=0&api-key=2cf1abc4b8adb0ad4a723a3b6e666c2a%3A2%3A70025254+');
  	 	$obj = json_decode($json, true);
  	 	
  	 	$article = $obj['results'][0];
  	 	$url = $article['url'];

  	 ?>
  	 	<a href="<?php  echo $url?>"><img src = "http://placehold.it/300x300.png"/></a>
  	 <?php

  	?>
  </div>
    
  

   
  
  <footer class="row">
    <div class="large-12 columns">
      <hr/>
      <div class="row">
        <div class="large-6 columns">
          <p><b>© Dan Servich & Shane Skillpa.</b></p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li ><a href="about.php">About SITMF</a></li>
        	<li ><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
   

<?php
require_once('includes/footer.inc.php');
?>