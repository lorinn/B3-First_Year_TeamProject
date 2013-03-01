<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 

<?php
session_start();
?>
<html>
<head>
<title>MyUniTrader Implementation Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Main holder to center page -->
<div id="wrapper">
  <!-- Header information -->
  <div id="header">
    <div id="top_selection">
     Welcome Student!  You can <a href="index.html"> Log in</a> or <a href="">Create an account</a>
    </div>
    <div id="logo">
      <img alt="logo" width="200" src="images/logo2.gif" />
    </div>
    <div id="login_top">
      <form name="login_form" action="login.php" method="post">
        <table width="100%" border="0" cellpadding="0" cellspacing="2">
          <tr>
            <td width="1%">Email</td>
            <td><input type="text" name="login_username" id="login_username" /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="login_password" id="login_password" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><button type="submit" name="login_btn" />Log in</button></td>
          </tr>
        </table>
      </form>
    </div>
    
    <div id="menu_tab">
            <div class="left_menu_corner"></div>
                    <ul class="menu">
                         <li><a href="index.html" class="nav1">  Home </a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav2">Buying</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav3">Selling</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav4">My Profile</a></li>
                         <li class="divider"></li>
                         <li><a href="#" class="nav4">My Wishlist</a></li>
                         <li class="divider"></li>                         
                         <li><a href="#" class="nav5">About Us </a></li>
                         <li class="divider"></li>
                         <li><a href="contact.html" class="nav6">Contact</a></li>
                         <li class="divider"></li>

                    </ul>

             <div class="right_menu_corner"></div>
            </div><!-- end of menu tab -->
  </div>
  <!-- Header ends --> 
            
  <!-- Make menu Left -->
  <div id="menu">
    <h4 class="categories">CATEGORIES</h4>
    <ul>
      <li><a href="index.html">Alcohol</a>
      <li><a href="index.html">Books</a>
      <li><a href="index.html">Clothes</a>
      <li><a href="index.html">Drugs</a>
      <li><a href="index.html">Games</a>
      <li><a href="index.html">PC</a>
      <li><a href="index.html">Phones</a>
      <li><a href="index.html">Sports</a>
      <li><a href="index.html">Food</a>
      <li><a href="index.html">Other</a>
    </ul>
    
<div class="prod_box_left">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Items wishing</a></div>
                 <div class="product_img"><a href="details.html"><img border="0" title="" alt="" src="images/laptop.gif"></a></div>
                 <div class="prod_price"><span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
</div>

<div class="prod_box_left">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Something</a></div>
                 <div class="product_img"><a href="details.html"><img border="0" title="" alt="" src="images/laptop.gif"></a></div>
                 <div class="prod_price"><span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
</div>

<div class="prod_box_left"> 
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
                 <div class="product_title"><a href="details.html">Something</a></div>
                 <div class="product_img"><a href="details.html"><img border="0" title="" alt="" src="images/laptop.gif"></a></div>
                 <div class="prod_price"><span class="price">270$</span></div>                        
            </div>
            <div class="bottom_prod_box"></div>             
</div>
    
  </div>
  
  
  
  <!-- Menu ends -->
  
  <!-- Main body for page -->
  <div id="body">
    <div id="top_search">
      <input class="search_box" type="text"><input class="search_button" value="SEARCH" type="submit"/>
    </div>
    
    <div id="item_page">
      <div id="left_item">
        <div id="profile_pic">
          <img src="images/smile.jpg">
        </div>
        <br/>
        <div id="user_contact">
          <button type="submit" name="send_mess" />Send message</button>
        </div>
      </div>
      <div id="item_title">

        <h3><?php echo $_SESSION['name']." ".$_SESSION['last_name']; ?> </h3>
	<div id="description"><h4>Description</h4>
	<p>My Manchester is a personalised online space for current students, which provides easy access to learning resources, services, student support and information, all in one place.
If you are not a current student you can still access certain resources from this page, such as the Crucial Guide Live and our 'askme' Help and Support resources.
Features include:</p>
      </div>        
    </div>

<div id="description">
<table border="1">
  <tr>
    <th id="title_table"><h2>Items Wanted</h2></th>
    <th id="title_table"><h2>Item for Trading</h2></th>
  </tr>
  <tr>
    <td >
      <li id="item_table"><a href="index.html">Item 1</a>
      <li id="item_table"><a href="index.html">Item 2</a>
      <li id="item_table"><a href="index.html">Item 2</a>
      <li id="item_table"><a href="index.html">Item 2</a>
    </td>
    <td>
      <li id="item_table"><a href="index.html">Item 1</a>
      <li id="item_table"><a href="index.html">Item 2</a>
      <li id="item_table"><a href="index.html">Item 2</a>
      <li id="item_table"><a href="index.html">Item 2</a>
    </td>
  </tr>
</table>
</div>

      
      <div id="item_comments">
        <form method="post">
          <h4>User Feedbacks:</h4>
          </br><hr>
	  <li><a href="index.html">User 1</a> : Good! <hr>
          <li><a href="index.html">User 2</a> : Good! <hr>
          <li><a href="index.html">User 3</a> : Good! <hr>
          <li><a href="index.html">User 4</a> : Good! <hr>
          <li><a href="index.html">User 5</a> : Good! <hr>
	  </br>
	  <textarea name="comments" >Leave your feedback here</textarea><br />
          <button type="submit" name="send_mess" />Submit</button>
        </form>      
      </div>

    </div>
   
  </div>

  <!-- Main body for page ends -->
  
  
  <!-- Footer information -->
   <div class="footer">
   

        <div class="left_footer">
        &copy; 2012 by Group B3.<br/> 
        School of Computer Science.<br/>
        University of Manchester.
        </div>
        
        <div class="right_footer">
        <a href="index.html">Back to Homepage</a>
        <a href="details.html">About Us</a>
        <a href="contact.html">Contact</a>
        </div>   
   
   </div>   
  <!-- Footer ends -->
  </div>  
<!-- wrapper end -->
</body>
</html> 
