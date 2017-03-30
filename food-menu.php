<?php
    require_once("dbcon-pdo.php");
    $numbers=['one', 'two', 'three', 'four', 'five', 'six', 'seven'];
    $tabRow=array();
    try
    {
        $dbcon=new PDO('mysql:host='.$GLOBALS['host'].';dbname='.$GLOBALS['dbase'], $GLOBALS['lin'], $GLOBALS['pwd']);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $state=$dbcon->prepare("SELECT category_name FROM menu_category");
        $state->execute();
        $tabRow=$state->fetchAll();
    }
    catch(PDOException $e)
    {
        $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        require_once("head.php")
    ?>
    <link rel="stylesheet" href="css/style_godfrey.css">

</head>
<body>

<div class="menu-container">
  <div class="food-item">
      <div class="worko-tabs">
  <?php for($i=0;$i<count($tabRow);$i++) echo '<input class="state" type="radio" name="tabs-state" title="tab-'.$numbers[$i].'" id="tab-'.$numbers[$i].'">'; ?>
<!--  <input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked />
  <input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two" />
  <input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three" />
  <input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four" /> -->

  <div class="tabs flex-tabs">
    <div class="menu-header">
        <?php for($i=0;$i<count($tabRow);$i++) echo '<label for="tab-'.$numbers[$i].'" id="tab-'.$numbers[$i].'-label" class="tab">'.$tabRow[$i]['category_name'].'</label>'; ?>
    <!--    <label for="tab-one" id="tab-one-label" class="tab">Appetizer</label>
        <label for="tab-two" id="tab-two-label" class="tab">Main Course</label>
        <label for="tab-three" id="tab-three-label" class="tab">Beverage</label>
        <label for="tab-four" id="tab-four-label" class="tab">Dessert</label> -->
    </div>

    <div id="tab-one-panel" class="panel active">
    <header>
            <div class="food-menu">
                <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt id="myImg">
                    <div class="food-name">
                        <p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                            <span class="currency">&#8369;250</span>
                        </p>       
                    </div>
               <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                    <div class="food-description">
                        <p class='description_food'>Food Description</p>
                    </div> 
                        <div class="food-price">
                            <p class='description_price'> &#8369;250</p>
                        </div> 
  
                </div>
                
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt id="myImg">
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</header>
    </div>
    <div id="tab-two-panel" class="panel">
      <header>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14610_irish-guinness-stew-lamb.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>GUINNESS IRISH STEW WITH LAMB
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14520_spicy-scallop-potato-soup.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPICY POTATO SOUP WITH SCALLOPS
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
          <div class="food-menu">
                <a href="#">
                    <img src="img/l_14610_irish-guinness-stew-lamb.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>GUINNESS IRISH STEW WITH LAMB
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14520_spicy-scallop-potato-soup.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPICY POTATO SOUP WITH SCALLOPS
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14004_avocado-salsa-cinnamon.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>AVOCADO SALSA WITH GINGER AND GARLIC
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14572_jar-spinach-spread.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH DIP
                               <span class="currency">&#8369;150</span>
                            </p>
                            
                    </div>
                </a>
            </div>
         <div class="food-menu">
                <a href="#">
                    <img src="img/l_14519_sweet-sour-dip-shrimp-crackers.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SWEET AND SOUR DIPPING SAUCE WITH KRUPUK 
                               <span class="currency">&#8369;350</span>
                            </p>
                            
                    </div>
                </a>
            </div>
  <!-- images placed inside block elements to deal with a Firefox rendering bug affecting  scaled flexbox images -->
</header>
    </div>
    <div id="tab-three-panel" class="panel">
        <header>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14685_strawberry-lemonade-basil.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>STRAWBERRY LEMONADE WITH BASIL
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14667_spinach-smoothies.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH AND APPLE SMOOTHIE
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14682_cucumber-margarita-glass.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>CUCUMBER MARGARITA
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14621_avender-ginger-lemonade.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>LAVENDER GINGER LEMONADE
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14685_strawberry-lemonade-basil.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>STRAWBERRY LEMONADE WITH BASIL
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14667_spinach-smoothies.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH AND APPLE SMOOTHIE
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14682_cucumber-margarita-glass.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>CUCUMBER MARGARITA
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14621_avender-ginger-lemonade.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>LAVENDER GINGER LEMONADE
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14685_strawberry-lemonade-basil.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>STRAWBERRY LEMONADE WITH BASIL
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14667_spinach-smoothies.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>SPINACH AND APPLE SMOOTHIE
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14682_cucumber-margarita-glass.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>CUCUMBER MARGARITA
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14621_avender-ginger-lemonade.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>LAVENDER GINGER LEMONADE
                               <span class="currency">&#8369;250</span>
                            </p>
                            
                    </div>
                </a>
            </div>
        </header>
    </div>
    <div id="tab-four-panel" class="panel">
        <header>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14621_avender-ginger-lemonade.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>CHOCOLATE ICE CREAM SANDWICHES
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
              <div class="food-menu">
                <a href="#">
                    <img src="img/l_14641_ice-cream-sandwiches--2-.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>DONUT ICE CREAM SANDWICH
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14002_elderflower-jelly.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>ELDERFLOWER JELLY
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14621_avender-ginger-lemonade.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>CHOCOLATE ICE CREAM SANDWICHES
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
              <div class="food-menu">
                <a href="#">
                    <img src="img/l_14641_ice-cream-sandwiches--2-.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>DONUT ICE CREAM SANDWICH
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14002_elderflower-jelly.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>ELDERFLOWER JELLY
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14621_avender-ginger-lemonade.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>CHOCOLATE ICE CREAM SANDWICHES
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
              <div class="food-menu">
                <a href="#">
                    <img src="img/l_14641_ice-cream-sandwiches--2-.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>DONUT ICE CREAM SANDWICH
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
             <div class="food-menu">
                <a href="#">
                    <img src="img/l_14002_elderflower-jelly.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>ELDERFLOWER JELLY
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14002_elderflower-jelly.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>ELDERFLOWER JELLY
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14002_elderflower-jelly.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>ELDERFLOWER JELLY
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
            <div class="food-menu">
                <a href="#">
                    <img src="img/l_14002_elderflower-jelly.jpg" alt>
                
                    <div class="food-name">
                        	<p class='description_content'>ELDERFLOWER JELLY
                               <span class="currency">&#8369;250</span>
                            </p>  
                    </div>
                </a>
            </div>
        </header>
    </div>
  </div>

</div>
    </div>

  <div class="order-item">
        <div class="header">
            Table #:
        </div>
            <div class="item-order">
          
            </div>
             <center><input type="submit" value="Place Order" class="btn-placeorder"></center>
     
    </div> 
</div>
    </body>
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
</html>