<?php include('header.php'); ?>
	       <?php 

		   $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user"; // Database name 
$tbl_name="longtrek"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$count=mysql_num_rows($result);
	   ?>


<div class="center_content">
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Featured books</div>
        
		
		<?php for($i=0;$i<$count;$i++) { ?>
		
        	<div class="feat_prod_box">
            
            	<div class="prod_img"><a href="details.php"><img src="images/prod1.gif" alt="" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><?php echo $row["name"]; ?></div>
                    <p class="details"><?php echo $row["details"] ?></p>
                    <a href="details.php?id=<?php echo $row["id"]?>" class="more">- more details -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>	
		<?php } ?>
            
          
            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <?php include('right_content.php');?>
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
      <?php include ('footer.php');?>        