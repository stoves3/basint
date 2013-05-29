<?php

    $imgbackground = imagecreatefromjpeg("images/sunflare.jpg");
	
	imageinterlace($imgbackground, true);
	
    imagejpeg($imgbackground);

	imagedestroy($imgbackground);
	
?>