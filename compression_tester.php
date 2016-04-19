<?php

/*******************************************************
Create your own web tools for HTTP Compression Tester 
lets you verify that web content is being compressed 
using gzip / deflate / mod_gzip / mod_deflate.

* Coded by Ican Bachors 2016.
* v001
* http://ibacor.com/labs/http-compression-tester-php
* Updates will be posted to this site.
********************************************************/

function compression_tester($url){
	$json = file_get_contents('https://query.yahooapis.com/v1/public/yql?q='.urlencode('SELECT channel.item FROM feednormalizer WHERE url ="'.$url.'"').'&format=json&diagnostics=false');
	$array = json_decode($json);
	$compression = "";
	$size = "";
	foreach($array->query->meta->url->headers->header as $anu){
		if($anu->name == "Content-Encoding"){
			$compression = $anu->value;
		}
		if($anu->name == "Content-Length"){
			$size = $anu->value;
		}
	}
	$html = '<p>URL: <b>'.$url.'</b></p>';
	if($compression != "" && $size != ""){
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		curl_exec($c);
		if (curl_error($c))
			die(curl_error($c));
		$info = curl_getinfo($c);
		curl_close($c);
		$html .= '<p>Compression working: <b>Yes</b></p>';
		$html .= '<p>Compression type: <b>'.$compression.'</b></p>';
		$html .= '<p>Uncompressed size: <b>'.$info['size_download'].'</b> bytes</p>';
		$html .= '<p>Compressed size: <b>'.$size.'</b> bytes</p>';
		$html .= '<p>Compression: <b>'.number_format(($info['size_download'] - $size) / $info['size_download'] * 100,1).'</b> %</p>';
	}else{
		$html .= '<p>Compression working: <b>No</b></p>';
	}
	return $html;
}
	
?>
