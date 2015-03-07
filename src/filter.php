<?php
//
// Load the PHP workflow library.
//
include_once("workflows.php");
include_once("img.php");
 
//
// Create the workflow object to use.
//
$wf = new Workflows();
 
//
// Get the raw query and store it for use.
//
$clean = trim("{query}");
$colors = ['turquoise'=>"#1abc9c",
		   'emerland'=>"#2ecc71",
		   'peter-river'=>"#3498db",
		   'amethyst'=>"#9b59b6",
		   'wet-asphalt'=>"#34495e",
		   'green-sea'=> "#16a085",
		   'nephritis'=> "#27ae60",
		   'belize-hole'=> "#2980b9",
		   'wisteria'=> "#8e44ad",
		   'midnight-blue'=> "#2c3e50",
		   'sun-flower'=> "#f1c40f",
		   'carrot'=> "#e67e22",
		   'alizarin'=> "#e74c3c",
		   'clouds'=> "#ecf0f1",
		   'concrete'=> "#95a5a6",
		   'orange'=> "#f39c12",
		   'pumpkin'=> "#d35400",
		   'pomegranate'=> "#c0392b",
		   'silver'=> "#bdc3c7",
		   'asbestos'=> "#7f8c8d"];
$i=1;
foreach ($colors as $key => $val) {
	if(!file_exists('icons/'.$key.'.png')){
		getImg($key,$val);
	}

	$wf->result($i."PM", $key.'~'.$val, $val, $key, 'icons/'.$key.'.png', "yes");	
	$i++;
}

 
//
// Echo out the xml of the choices.
//
echo $wf->toxml();





?>