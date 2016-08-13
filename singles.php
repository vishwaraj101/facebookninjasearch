<?php 


$gender=htmlEntities($_POST['gender'], ENT_QUOTES);
$place=htmlEntities($_POST['place'], ENT_QUOTES);
$likes=htmlEntities($_POST['likes'], ENT_QUOTES);
$emp_key=htmlEntities($_POST['emp_key'], ENT_QUOTES);
$school_key=htmlEntities($_POST['school_key'], ENT_QUOTES);
$company=htmlEntities($_POST['company'], ENT_QUOTES);


function get_singles($gender,$place,$likes){

	echo "https://www.facebook.com/search/top/?q=single ".$gender." in ".$place." who likes ".$likes."&__mref=message_bubble";
}



function find_employees($emp_key,$company){
	echo "https://www.facebook.com/search/top/?q=".$emp_key."%20who%20work%20at%20".$company."";
}


function find_school_mates($school_key,$school){
echo "https://www.facebook.com/search/top/?q=".$school_key."%20who%20went%20to%20".$school."";
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
	<h2>Search for Singles</h2>
<form action="singles.php" method="POST">
Single :
<select name="gender">

<option value="girls">girls</option>
<option value="boys">boys</option>
</select>

Near <input name="place" type="text" >
who likes: <input name="likes" type="text" >


<button>search</button>

</form>

<a href="<?php get_singles($gender,$place,$likes);?>">Show singles</a>

</br>








<h2>Search for employees</h2>
<br>
<form action="singles.php" method="POST">
<select name="emp_key">
	<option value="people">People</option>
	<option value="male">Males</option>
	<option value="female">Females</option>
</select>
Who work at: 
<input name="company" type="text">
<button name="show">Show employees</button>

</form>

<a  target=_blank href="<?php find_employees($emp_key,$company);?>">Show Employees</a>


<h2>Search for old school mates </h2>
<br>

<form action="singles.php" method="POST">

<select name="school_key">
	<option value="people">People</option>
	<option value="male">Males</option>
	<option value="female">Females</option>
</select>

School attended: 
<input name="school" type="text">

<button>Search</button>

</form>
<a  target=_blank href="<?php find_school_mates($school_key,$school);?>">Show old mates</a>
</br>
<br>
<h4>Example : People who work at "google"</h4>
<h4>Example : Girls :P near "bhopal" who likes -->"cake" hit search and click show singles </h4>


</center>
<footer><?php include('hit.php'); ?></footer>
 </body>
 </html>
