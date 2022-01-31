<?php
$options[] = array("name" => "Homepage",
			 "sicon" => "user-home.png",
                   "type" => "heading");

$options[] = array( "name" => "Featured Posts",
					"desc" => "Choose the category of the featured posts",
					"id" => SN."sticky_posts",
					"type" => "select",
					"class" => "tiny", //mini, tiny, small
					"options" => $options_categories);
 	

?>