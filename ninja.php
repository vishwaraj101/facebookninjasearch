<?php 

#imports
include_once('calls_with_balls.php'); //include all the calls 


$id=$_POST['id']; // get user id via post param.

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ninja search</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="active"><a href="singles.php">Single search</a></li>
      <li class="active"><a href="common.php">Whats common b/w both</a></li>
    
    </ul>
  </div>
</nav>
  
<center><h1>Facebook Ninja Search</h1></center>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

 <center>


</br>
<form action="ninja.php" method="POST">
Enter User Id : <input name="id" type="text">

<button>Find</button> 

<!--All the href links-->
</br>

<br><a onclick="" href="<?php all_user_posts($id); ?>">All posts including birthday wishes ?</a></br>
<br><a onclick="" href="<?php get_pages_liked($id); ?>">What person likes ?</a></br>
<br><a onclick="" href="<?php get_place_visited($id); ?>">Recent Place Visited?</a> </br>
<br><a onclick="" href="<?php get_photos_byperson($id); ?>">All shared Photos</a></br>
<br><a onclick="" href="<?php get_place_visited($id); ?>">Photos liked by him?</a> </br>
<br><a onclick="" href="<?php all_photos_user_tagged_in($id); ?>">Photos Tagged in ?</a></br>
<br><a onclick="" href="<?php photos_user_commented_on($id); ?>">Photos commented on ?</a></br>

<br><a onclick="" href="<?php posts_user_tagged_in($id); ?>">Posts in which he is tagged ?</a> </br>
<br><a onclick="" href="<?php videos_user_related_with($id); ?>">Videos user related with ?</a> </br>
<br><a onclick="" href="<?php videos_liked_by_user($id); ?>">Videos liked ?</a> </br>
<br><a onclick="" href="<?php get_friends($id); ?>">User Friends ?</a> </br>
<br><a onclick="" href="<?php groups_joined_by_user($id); ?>">Groups joined by user ?</a></br>
<br><a onclick="" href="<?php get_friends($id); ?>">User Friends ?</a> </br>
<br><a onclick="" href="<?php get_relatives($id); ?>">Relatives of the User?</a> </br>
<br><a onclick="" href="<?php event_joined($id); ?>">Event user joined ?</a> </br>
<br><a onclick="" href="<?php event_invited_in($id); ?>">Event invites to the user ?</a> </br>

</center>


</body>
</html>

