<?php 
include('header_menuleft.php'); 
include('config.php'); 

$user_id = $_SESSION['user_id'];

?>    
    
    <div class="buying_box_body">
    <h2>Buying items</h2>
    
    
<?php
     $query3 = mysql_query("SELECT * FROM items");
     $endline_count=0;
     while ($row = mysql_fetch_assoc($query3)) 
     {
              $item_id = $row['item_id'];
              $user_id = $row['user_id'];
              $creation_date = $row['creation_date'];
              $expiration_date = $row['expiration_date'];
              $status = $row['status'];
              $type = $row['type'];
              $name = stripslashes($row['name']);
              $category_id = $row['category_id'];
              $views = $row['views'];

              $picture = $row['picture'];
	      
  
              if($picture == NULL)
                $picture='images/no_image.jpg';
	      else
    		$picture="uploads/".$picture;

              $query4 = mysql_query("SELECT * FROM users WHERE user_id = '$user_id' ");
              while ($row = mysql_fetch_assoc($query4)) 
              {
                $owner_name = $row['name'];
                $owner_last_name = $row['last_name'];
                $query5 = mysql_query("SELECT * FROM categories WHERE category_id = '$category_id' ");
                while ($row = mysql_fetch_assoc($query5)) 
                {
                  $category_name = $row['category_name'];
                  
                    if($status == 1 && $type == 1 && $endline_count < 16)
                    {
$endline_count++;
echo "
<div class='prod_box'>
            <div class='top_prod_box'></div>
            <div class='center_prod_box blocks'>            
                 <div class='product_title'><a href='item_page.php?id=".$item_id."'>".$name."</a></div>
		 <div class='product_img'><a href='item_page.php?id=".$item_id."'><img border='0' height='94' width='94'  src='".$picture."'></a></div>
                 <div class='creation_date'>Created: <span class='creation'>".$creation_date ."</span></div> 
                 <div class='expiration_date'>Expires: <span class='expiration'>".$expiration_date ."</span></div> 
                 <div class='created_by'>By: <span class='user'>".$owner_name." ".$owner_last_name."</span></div>              
                 <div class='views_product'>Views: <span class='views'>".$views ."</span></div>  
                 <div class='category_name'>Category: <span class='category'>".$category_name ."</span></div> 
            </div>
            <div class='bottom_prod_box'></div>             
</div>
";

 
                    }
                }
              }
     }

?>


</div>
<script>
var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;

 $('.blocks').each(function() {

   $el = $(this);
   topPostion = $el.position().top;
   
   if (currentRowStart != topPostion) {

     // we just came to a new row.  Set all the heights on the completed row
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }

     // set the variables for the new row
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);

   } else {

     // another div on the current row.  Add it to the list and check if it's taller
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);

  }
   
  // do the last row
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
   
 })
</script>
<?php

include('footer.php'); 
?>
