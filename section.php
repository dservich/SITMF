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



<!-- 

This begins the main body of the page 

-->
<!--
<?php
      /*$section = $_GET['section'];
      echo $section;
      $json = file_get_contents("http://api.nytimes.com/svc/news/v3/content/all/$section/24.json?limit=1&offset=0&api-key=2cf1abc4b8adb0ad4a723a3b6e666c2a%3A2%3A70025254");
      $obj = json_decode($json, true);
      
      $article = $obj['results'][0];
      $url = $article['url'];

     */?>
      <a href="<?php  echo $url?>"><img src = "http://placehold.it/300x300.png"/></a>
     

-->
  <br>

  <?php
          static $api_key = "2cf1abc4b8adb0ad4a723a3b6e666c2a:2:70025254";
          $json = file_get_contents('http://api.nytimes.com/svc/news/v3/content/all/'.$_GET['section'].'/72.json?limit=4&offset=0&api-key='.$api_key);
          $obj = json_decode($json, true);
          //$article = $obj['results'][0];
          //$url = $article['url'];
        ?>

  <div class = "row">
    <div class = "large-12 columns">
      <h2 align = "center"> <?php echo $_GET['section'] . " Articles";?></h2>
    </div>
  </div>

    <div class="row">
    <div class="large-4 columns">
      
      <a href="article.php?link=<?php $article = $obj['results'][0]; $url = $article['url']; echo $url;?>">
      <img src="world.png"/><h4><?php $title = $article['title']; echo $title;?></h4></a>
    </div>
    
    <div class="large-4 columns">
      
      <a href="article.php?link=<?php $article = $obj['results'][1]; $url = $article['url']; echo $url;?>">
      <img src="world.png"/><h4><?php $title = $article['title']; echo $title;?></h4></a>
    </div>
    
    <div class="large-4 columns">
      
      <a href="article.php?link=<?php $article = $obj['results'][2]; $url = $article['url']; echo $url;?>">
      <img src="world.png"/><h4><?php $title = $article['title']; echo $title;?></h4></a>
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