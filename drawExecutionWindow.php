<?php

    $pixelSize = 2;
	$screenWidth = 320;
	$screenHeight = 200;

    $imgExecuteWindow = imagecreatetruecolor($screenWidth * $pixelSize, $screenHeight * $pixelSize);

	header("Content-type: image/png");
	imagepng($imgExecuteWindow);
	imagedestroy($imgExecuteWindow);
	
?>