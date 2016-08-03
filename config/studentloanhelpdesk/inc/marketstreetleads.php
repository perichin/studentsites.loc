<?php

// marketstreetleads
if(isset($_SESSION['aff_id']) && !empty($_SESSION['aff_id'])){
	switch($_SESSION['offer_id']){
		case '205':
			$do_pixel = rand(0,9);
			if($do_pixel < 3){
				$pixel = fopen("http://marketstreetleads.go2cloud.org/SP4v?aff_id=".$_SESSION['aff_id']."&aff_sub=".$_SESSION['sub_id1']."&aff_sub2=".$_SESSION['sub_id2'], "r");
			}
			break;
		case '211':
		default:
			$do_pixel = rand(0,9);
            if($do_pixel < 3){
				$pixel = fopen("http://marketstreetleads.go2cloud.org/SP55?aff_id=".$_SESSION['aff_id']."&aff_sub=".$_SESSION['sub_id1']."&aff_sub2=".$_SESSION['sub_id2'], "r");
				$_SESSION['fire_fb_pixel'] = 'true';
			}
			else{
				$_SESSION['fire_fb_pixel'] = 'false';
			}
			break;		
	}
}