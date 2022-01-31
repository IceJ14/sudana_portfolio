<?php
    $options[] = array( "name" => "Color Settings",
    					"sicon" => "colors.png",
						"type" => "heading");

	$options[] = array( "name" => "CUSTOMIZE MAIN COLORS",
						"desc" => "You can set main colors below. Leave the fields blank to restore the defaults",
						"type" => "info");

	$options[] = array( "name" => "Logo Text Color",
						"id" => SN."logo_text_color",
						"desc" => "Default is #C7BB73",
						"std" => "#C7BB73",
						"type" => "color");

	$options[] = array( "name" => "Body Text Color ",
						"desc" => "Default is #666659",
						"id" => SN."body_color",
						"std" => "#666659",
						"type" => "color");

	$options[] = array( "name" => "Body Regular Links Color ",
						"desc" => "Default is #8C8C7B",
						"id" => SN."body_link_color",
						"std" => "#8C8C7B",
						"type" => "color");

	$options[] = array( "name" => "Body Regular Links Color Hover ",
						"desc" => "Default is #000000",
						"id" => SN."body_link_color_hover",
						"std" => "#000000",
						"type" => "color");

	$options[] = array( "name" => "Main Headings Color (H2,H3...)",
						"id" => SN."main_h_color",
						"desc" => "Default is #2A2A26",
						"std" => "#2A2A26",
						"type" => "color");

	$options[] = array( "name" => "Sidebar Headings Color",
						"id" => SN."sidebar_h_color",
						"desc" => "Here you can set a different color for sidebar headings than the above main headings color",
						"std" => "#FFFFFF",
						"type" => "color");

	$options[] = array( "name" => "Post Title Link Color",
						"id" => SN."post_title_link_color",
						"desc" => "Default is #8C8C7B",
						"std" => "#8C8C7B",
						"type" => "color");

	$options[] = array( "name" => "Post Title Link Color Hover",
						"id" => SN."post_title_link_color_hover",
						"desc" => "Default is #000000 links main color",
						"std" => "#000000",
						"type" => "color");


	$options[] = array( "name" => "Navigation Link Color",
						"id" => SN."nav_link_color",
						"desc" => "Default is #8C8C7B",
						"std" => "#8C8C7B",
						"type" => "color");

	$options[] = array( "name" => "Navigation Link Color Hover",
						"id" => SN."nav_link_color_hover",
						"desc" => "Default is #000000",
						"std" => "#000000",
						"type" => "color");


?>