<?php

function hex2rgb($hex) {
   $hex = str_replace("#", "", strtoupper($hex));

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}

function getImg($name='turquoise',$hexa="#1abc9c"){
$rgb=hex2rgb($hexa);
$my_img = imagecreate( 48, 48 );

$background = imagecolorallocate( $my_img, $rgb[0],$rgb[1],$rgb[2] );
//imagecolordeallocate( $my_img,$background );
$img= imagepng( $my_img,'icons/'.$name.'.png' );
}

?>