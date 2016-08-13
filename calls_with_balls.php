<?php 
//coded by https://www.facebook.com/vicdjrocks


function get_fb_id($name){

$url = 'http://graph.tips/profile_id.php?username='.$name.'';

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);
$response = curl_exec($cURL);
$response["id"];
curl_close($cURL);


}







 function all_user_posts($id){
	echo "https://www.facebook.com/search/".$id."/stories-by";
}

function posts_user_tagged_in($id){
	echo "https://www.facebook.com/search/".$id."/stories-by";
}


function get_friends($id){

echo "https://www.facebook.com/search/".$id."/friends";

}

function get_pages_liked($id){


echo "https://www.facebook.com/search/".$id."/pages-liked";

}

function get_place_visited($id){

	echo "https://www.facebook.com/search/".$id."/places-visited/";
}

function get_photos_byperson($id){

	echo "https://www.facebook.com/search/".$id."/photos-by";
}

function get_photos_liked($id){

	echo "https://www.facebook.com/search/".$id."/photos-liked";
}


function all_photos_user_tagged_in($id){

	echo "https://www.facebook.com/search/".$id."/photos-of";
}



function photos_user_commented_on($id){

	echo "https://www.facebook.com/search/".$id."/photos-commented";
}

 function videos_of_user($id){

	echo "https://www.facebook.com/search/".$id."/videos-by";
}

function videos_user_related_with($id){
	echo "https://www.facebook.com/search/".$id."/videos-of";
}

function videos_liked_by_user($id){
	echo "https://www.facebook.com/search/".$id."/videos-liked";
}

function event_joined($id){
	echo "https://www.facebook.com/search/".$id."/events-joined";
}


function event_invited_in($id){
	echo "https://www.facebook.com/search/".$id."/events";
}
 
function get_relatives($id){
	echo "https://www.facebook.com/search/".$id."/relatives";
}

function groups_joined_by_user($id){
	echo "https://www.facebook.com/search/".$id."/groups";
}

?>