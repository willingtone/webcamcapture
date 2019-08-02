<?php
/*
// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';

$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],''.$filename) ){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/webcamImage/' . $filename;
}

// Return image url
echo $url;
*/



//set random name for the image, used time() for uniqueness

$filename =  date('YmdHis') . '.jpeg';
$filepath = 'webcamImage/';

move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);

echo $filepath.$filename;


// upload.php
/*var $file = $_FILES['avatarimage'];
$file_to_upload = $_FILES['avatarimage']['tmp_name'];
 $file_name = date('YmdHis') .'.jpg';
 move_uploaded_file($file_to_upload, $file_name);*/
?>