<!-- ----------------------------

 This is the second row of the body 

 -------------------------------- -->
   <div class="row">
    <div class="large-12 columns">
      <div class="row">
 
     
 
        <div class="large-4 small-6 columns">

        	<?php
  	 			$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/Politics/48.json?limit=5&offset=0&api-key=2cf1abc4b8adb0ad4a723a3b6e666c2a%3A2%3A70025254');
  	 			$obj = json_decode($json, true);
  	 	
  	 			$article = $obj['results'][0];
  	 			$url = $article['url'];
	    	?>
          <a href="<?php  echo $url?>"><img src="politics.png"/></a>
          <h6 class="panel"><a href = "section.php?section=politics">Click here for more news in Politics</h6>
        </div>
 
        <div class="large-4 small-6 columns">
        	<?php
  	 			$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/Science/48.json?limit=5&offset=0&api-key=2cf1abc4b8adb0ad4a723a3b6e666c2a%3A2%3A70025254');
  	 			$obj = json_decode($json, true);
  	 	
  	 			$article = $obj['results'][0];
  	 			$url = $article['url'];
	    	?>
          <a href="<?php  echo $url?>"><img src="science.png"/></a>
          <h6 class="panel"><a href = "section.php?section=science">Click here for more news in Science </h6>
        </div>
 
        <div class="large-4 small-6 columns">

        	<?php
  	 			$json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/Technology/48.json?limit=5&offset=0&api-key=2cf1abc4b8adb0ad4a723a3b6e666c2a%3A2%3A70025254');
  	 			$obj = json_decode($json, true);
  	 	
  	 			$article = $obj['results'][0];
  	 			$url = $article['url'];
	    	?>
          <a href="<?php  echo $url?>"><img src="technology.png"/></a>
          <h6 class="panel"><a href = "section.php?section=technology">Click here for more news in Technology</h6>
        </div>
      
 
      </div>
    </div>
  </div>
 
 
 
    
    </div>
    
    