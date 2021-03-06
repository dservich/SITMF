<?php
require_once('includes/header.inc.php');
?>

<!-- This row is our title bar -->
<div class = "row">
	<div class = "large-12 columns">
    <p align = "center" style="font-family:impact;
     border-style:solid; border-color:black">
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
        <li><a href="code-of-conduct.php">Code of Conduct</a></li>

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
 
     
 
        <div class="large-4 small-6 columns" id = "WorldThumbnail">
        	<?php
        	static $api_key = "2cf1abc4b8adb0ad4a723a3b6e666c2a:2:70025254";
  	 			$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/World/24.json?limit=5&offset=1&api-key='.$api_key);
  	 			$obj = json_decode($json, true);
  	 			$article = $obj['results'][0];
  	 			$url = $article['url'];
	    	?>
  	 		
  	 		<a href="article.php?link=<?php  echo $url?>"><img src="world.png"/></a>
  			
  			<?php

  			?>

          
          <h6 class="panel"><a href = "section.php?section=World">Worldy News and Discussion</a></h6>
        </div>
 
        <div class="large-4 small-6 columns" id = "SportsThumbnail">
          
			
          <a href="#"><img src="sports.png"/> </a>
          <h6 class="panel"><a href = "section.php?section=Sports">Sports News and Discussion</a></h6>
        </div>
 
        <div class="large-4 small-6 columns" id = "BusinessThumbnail">
          
			<?php
  	 			$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/Business/24.json?limit=5&offset=0&api-key='. $api_key);
  	 			$obj = json_decode($json, true);
  	 			$article = $obj['results'][0];
  	 			$url = $article['url'];
	    	?>
	    	
          <a href="article.php?link=<?php  echo $url?>"><img src="business.png"/></a>
          <h6 class="panel"><a href = "section.php?section=Business">Business News and Discussion</a></h6>
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
 

 
     
     
    
    
  </div>

<!-- ----------------------------

 This is the second row of the body 

 -------------------------------- -->
   <div class="row">
    <div class="large-12 columns">
      <div class="row">
 
     
 
        <div class="large-4 small-6 columns">
          <a href="#"><img src="politics.png"/></a>
          <h6 class="panel"><a href = "section.php?section=politics">Political News and Discussion</h6>
        </div>
 
        <div class="large-4 small-6 columns">	
          <a href="#"><img src="science.png"/></a>
          <h6 class="panel"><a href = "section.php?section=science">Scientific News and Discussion</h6>
        </div>
 
        <div class="large-4 small-6 columns">
          <a href="#"><img src="technology.png"/></a>
          <h6 class="panel"><a href = "section.php?section=technology">Technology News and Discussion</h6>
        </div>
      
 
      </div>
    </div>
  </div>
 
 
 
    
    </div>


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