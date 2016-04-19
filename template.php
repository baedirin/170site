<?php include ("includes/top.php");?>
<div id= "subHeader">
 	<h1 id= "pageTitle">Home</h1>
    <a href="#" id= "hamburger" class="menu-link">&#9776;</a>
</div><br>
</header>
<div id= "leftContainer">
<a href= "template.php"><img alt= "logo" id= "siteLogo" src= "images/logo.png"/></a>
<nav id= "cssmenu">
	<ul>
    	<li class="active"><a href="template.php"><span>Home</span></a></li>
   		<li class="has-sub"><a href="#"><span>About</span></a>
            <ul>
              <li><a href="about.php"><span>About Jayne</span></a></li>
              <li><a href="contact.php"><span>Contact Jayne</span></a></li>
            </ul>
      	</li>
        <li class="has-sub"><a href="gallery.php"><span>Artwork</span></a>
          	<ul>
              <li><a href="commission.php"><span>Commission Artwork</span></a></li>
            </ul>
      	</li>
        <li class="has-sub"><a href="products.php"><span>Products</span></a>
            <ul>
              <li><a href="pricing.php"><span>Pricing and Info</span></a></li>
            </ul>
      	</li>
    </ul>
</nav>
</div>
<div id= "mainContent">
	<div id= "contentCarousel">
    	<img id= "imgCarousel" alt= "carousel" src= "images/homeimg.jpg"/>
    </div>
    <article>
    <h2>Welcome to Jayne Strange!</h2>
    <p>This is my website, where I show things I've drawn, created, and crafted.</p>
	<p>I am a freelance artist in the western US. My work varies from paintings to sculpture and bone engravings.</p>
    <p>I have a beautiful three year old daughter I spend most of my time with and am happily married. My personal hobbies include art and playing games. I love Lord of the    Rings/The Hobbit, unicorns, werewolves, and anything with bone/skulls/skeletons.</p>
    <p>For commission information, pricing and my past work, please explore my website and do not hesitate to contact me!</p>
    </article>
<?php include ("includes/bottom.php");?>
