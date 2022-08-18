<?php

// new filename
$filename = 'pic_'.date('YmdHis') . '.jpeg';


$url = 'http://localhost:8888/cvms';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
   $url = 'http://localhost:8888/cvms' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
   
}

// Return image url
echo $url;