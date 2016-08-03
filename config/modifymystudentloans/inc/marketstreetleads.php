<?php

// marketstreetleads
if(isset($_SESSION['aff_id']) && !empty($_SESSION['aff_id'])){
	// $do_pixel = rand(0,1);
	// if($do_pixel == 1){
		$pixel = fopen("http://marketstreetleads.go2cloud.org/SP4x?aff_id=".$_SESSION['aff_id']."&aff_sub=".$_SESSION['sub_id1']."&aff_sub2=".$_SESSION['sub_id2'] ,"r");
	// }
}