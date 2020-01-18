<?php 
/**
* as we are saving images urls in same field with piped line (|) as seperation,purpose is to get array of all image urls
*
* @var array
* @author[Shoaib Akbar][<shoaibjakhar11@gmail.com>]
*/
function urls_array($url){

	if (!empty($url)) {

		$url_arr = explode("|", $url);
		return $url_arr;
	}

}

/**
* as we are saving images urls in same field with piped line (|) as seperation,purpose is to get first image url
*
* @var array
* @author[Shoaib Akbar][<shoaibjakhar11@gmail.com>]
*/
function primary_img_url($url){

	if (!empty($url)) {

		$url_arr = explode("|", $url);
		return $url_arr[0];
	}

}