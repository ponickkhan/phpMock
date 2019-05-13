<?php
 # If you don't know the type of image you are using as your originals.
 // $image = imagecreatefromstring(file_get_contents('image.png');
 // $frame = imagecreatefromstring(file_get_contents('frame.png'));

 # If you know your originals are of type PNG.
// $src= imagecreatefrompng('image.png');
// $dest = imagecreatefrompng('frame.png');


// $redimg = imagecreatefrompng('image.png');
// $image = imagecreatefrompng('frame.png');


//set the source image (foreground)
$sourceImage = 'image.png';

//set the destination image (background)
$destImage = 'frame.jpg';

//get the size of the source image, needed for imagecopy()
list($srcWidth, $srcHeight) = getimagesize($sourceImage);

//create a new image from the source image
$src = imagecreatefrompng($sourceImage);

//create a new image from the destination image
$dest = imagecreatefromjpeg($destImage);

//set the x and y positions of the source image on top of the destination image
$src_xPosition = 218; //75 pixels from the left
$src_yPosition = 180; //50 pixels from the top

//set the x and y positions of the source image to be copied to the destination image
$src_cropXposition = 0; //do not crop at the side
$src_cropYposition = 0; //do not crop on the top
						
//merge the source and destination images
imagecopy($dest,$src,$src_xPosition,$src_yPosition,$src_cropXposition,$src_cropYposition,$srcWidth,$srcHeight);

//output the merged images to a file
/*
 * '100' is an optional parameter,
 * it represents the quality of the image to be created,
 * if not set, the default is about '75'
 */
header( "Content-type: image/jpg");
imagejpeg($dest);
imagejpeg($dest,'place.jpg',100);

//destroy the source image
imagedestroy($src);

//destroy the destination image
imagedestroy($dest);
?>