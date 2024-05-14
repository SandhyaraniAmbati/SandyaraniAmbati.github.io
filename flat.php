<?php
$project = array("A-BLOCK" =>array("G-FLOOR" => 
 	              						array("01" => array("status" => 0, "Sqft" => 1520, "facing" => "East"),
 						 	        		        "02" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
 	                     					  "03" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						  					          "04" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						                       ),
 				                    "1-FLOOR" =>
 					                     array("01" => array("status" => 0, "Sqft" => 1520, "facing" => "East"),
 						 	        		           "02" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
 	                     					     "03" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						  					             "04" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						                       )),
 				   "B-BLOCK" => array("G-FLOOR" => 
 	              						array("01" => array("status" => 0, "Sqft" => 1520, "facing" => "East"),
 						 	        		        "02" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
 	                     					  "03" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						  					          "04" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						                       ),
 				                    "1-FLOOR" =>
 					                     array("01" => array("status" => 0, "Sqft" => 1520, "facing" => "East"),
 						 	        		           "02" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
 	                     					     "03" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						  					             "04" => array("status" => 0, "Sqft" => 1220, "facing" => "East"),
						                       ))


                    
 );
  $input_block = $_POST['input_block']; 
  $input_floor = $_POST['input_floor'];
  $input_flat =  $_POST['input_flat'];
  echo  "<ul class='pricing-table'>";
  echo "<li class='bullet-item'>".$project[$input_block][$input_floor][$input_flat]["status"]."</li>";
  echo "<li class='bullet-item'>".$project[$input_block][$input_floor][$input_flat]["Sqft"]."</li>";
  echo "<li class='bullet-item'>".$project[$input_block][$input_floor][$input_flat]["facing"]."</li>";
  echo "</ul>";
?>
