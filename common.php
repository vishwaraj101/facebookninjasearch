<?php 

$id=$_POST['id'];
$f_id=$_POST['f_id'];

function common_likes($id,$f_id){

echo "https://www.facebook.com/search/".$id."/pages-liked/".$f_id."/pages-liked/intersect";
}

function photos($id,$f_id){

echo "https://www.facebook.com/search/".$id."/photos-liked/".$f_id."/photos-liked/intersect";

}

 function post_commented_on($id,$f_id)
{
	echo "https://www.facebook.com/search/".$id."/stories-commented/".$f_id."/stories-commented/intersect";
}

 function photo_both_tagged_in($id,$f_id)
{
	echo "https://www.facebook.com/search/".$id."/photos-of/".$f_id."/photos-of/intersect";
}


 ?>

<html>
 <head>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<title>Singles
 	</title>
 </head>
 <body>
 
<center>
	<h2>Common things b/w you and your friend</h2> </br>
<form action="common.php" method="POST">


Your id:<input name="id" type="text">
Friend id:<input name="f_id"type="text">
<button>Find</button>

</form>

<a href="<?php common_likes($id,$f_id);?>">Page you both Liked</a> </br>
<a href="<?php photos($id,$f_id);?>">Photos you both Liked</a></br>
<a href="<?php photo_both_tagged_in($id,$f_id);?>">Photos both tagged in</a></br>
<a href="<?php post_commented_on($id,$f_id);?>">Post you both commented on</a></br>

</center>
 </body>
 </html>