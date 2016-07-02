<!DOCTYPE html>
<!-- To ACCESS USE URL: http://176.32.230.53/pa11989kumar.com/ReviewsProject/Reviews.php -->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Review Page using Bootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
<div class="navbar navbar-inverse navbar-fixed-top">
	<a href="#div1" class="navbar-brand active bold" id="home">Home</a>
	<a href="#div2" class="navbar-brand bold active">Reviews</a>
	<a href="#div3" class="navbar-brand active bold">Post New Review</a>
</div>
<div class="container">
	<div class="navbar-header">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span> 
	</div>
</div>			
<div class="container contentContainer fontcolor" id="topContainer">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" id="topRow">
			<h1 class="marginTop" id="div1">Welcome!!</h1>
			
<?php
session_start();
$json = file_get_contents('http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&noOfReviews=10&internal=1&yelp=1&google=1&offset=50&threshold=1');
$obj = json_decode($json,true);
      // Dump all data of the Object
	
?>
		<div class="container marginBottom" id="business">
			<div class="col-md-10 marginTop">
				<h2><span class="glyphicon glyphicon-star" class="bold">Business_Contact_Details</h2>
				<p> 
				<h4 class="bold">Business Name: <?php echo $obj['business_info']['business_name']."<br>"; ?></h4>
				<h4 class="bold">Address: <?php echo $obj['business_info']['business_address']."<br>"; ?></h4>
				<h4 class="bold">Work Phone: <?php echo $obj['business_info']['business_phone']."<br>"; ?></h4>
				<h4 class="bold" id ='url'>External URL: <a target='_blank' href="<?php echo $obj['business_info']['external_url'];?>"><?php echo $obj['business_info']['external_url']."<br>"; ?></a></h4>
				<h4 class="bold" id ='url'>External Page URL: <a target='_blank' href="<?php echo $obj['business_info']['external_page_url'];?>"> <?php echo $obj['business_info']['external_page_url']."<br>"; ?></a></h4>
				<h4 class="bold">Total Avg Ratings: <?php echo $obj['business_info']['total_rating']['total_avg_rating']."<br>"; ?>	</h4>	
				<h4 class="bold">Total No. of Reviews: <?php echo $obj['business_info']['total_rating']['total_no_of_reviews']."<br>"; ?></h4>
				</p>	
			</div>
		</div>   
		
		</div>
	</div>
</div>


<div class="container contentContainer" id="div2">
	<h1 class="center">Reviews</h1>
	
	
<?php	 
$json = file_get_contents('http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&noOfReviews=10&internal=1&yelp=1&google=1&offset=50&threshold=1');
$obj = json_decode($json,true);
	  foreach($obj['reviews'] as $ob)
	  {
		 echo "<b class='b'>Customer Full Name: ".$ob['customer_name']." ".$ob['customer_last_name']."</b><br>";
		 echo "<i>Date of Review: ".$ob['date_of_submission']."</i><br>";
		 echo "<b>Description: ".$ob['description']."</b><br>";
		 echo "<b>Rating: ".$ob['rating']."</b><br>";
		 echo "<b>Review From: ".$ob['review_from']."</b><br>";
		 echo "<b>Review URL: ".$ob['review_url']."</b><br>";
		 echo "<b>Review ID: ".$ob['review_id']."</b><br>";
		 echo "<b id='url'>Customer URL: <a target='_blank' href=".$ob['customer_url'].$ob['review_source'].">".$ob['customer_url'].$ob['review_source']."</a></b><br>";
		 echo "<b>Review Source: ".$ob['review_source']."</b><br><br><br>";
	  }
?>

</div>

<style>
	.b{
		font-size:1.4em;
	}
	#div2{
		background-image:url("Review.jpg");
		height:2400px;
		width:100%;
		background-size:cover;
		color: grey;
		font-size:1.0em;
	}
	span.glyphicon-star{
		margin-left:-15px;
	}
	#business{
		margin-left:-190px;
	}
	.fontcolor{
		color: white;
	}
	#topContainer{
		background-image:url("Background.jpg");
		height:500px;
		width:100%;
		background-size:cover;
		padding-top: 20px;
	}
	#topRow{
		margin-top:80px;
		text-align:center;
	}
	#topRow h1{
		font-size:300%;
	}
	.navbar .navbar-nav {
		display: inline-block;
		float: none;
	}
	.navbar-brand{
		font-size:1.8em;
	}
	.navbar .navbar-collapse {
		text-align: center;
	}
	.bold{
		font-weight:bold;
	}
	.marginTop{
		margin-top:10px;
	}
	.center{
		text-align:center;
	}
	.title {
		margin-top:100px;
		font-size:300%;
	}
	#footer {
		<!--background-color:#B0D1FB;-->
		padding-top:-10px;
		height:850px;
		width:100%;
		background-image:url("Reviews.jpg");
		background-size:cover;
	}
	.marginBottom {
		margin-bottom:30px;
	}
	.c-select{
		width:100%;
	}
<!--NOTE: Below CSS is from stackoverflow.com-->	
	star-rating{
	font-size: 0;
	}
	.star-rating__wrap{
		display: inline-block;
		font-size: 1.5rem;
	}
	.star-rating__wrap:after{
		content: "";
		display: table;
		clear: both;
	}
	.star-rating__ico{
		float: right;
		padding-left: 2px;
		cursor: pointer;
		color: #FFB300;
	}
	.star-rating__ico:last-child{
		padding-left: 0;
	}
	.star-rating__input{
		display: none;
	}
	.star-rating__ico:hover:before,
	.star-rating__ico:hover ~ .star-rating__ico:before,
	.star-rating__input:checked ~ .star-rating__ico:before{
		content: "\f005";
		
	}
</style>

<body>
<form id="div3">
<div class="container contentContainer" id="footer">
		<div class="col-md-6 col-md-offset-3" >
		
	<h1 class="center title">Post a Review</h1>
	<p class="lead center">Your opinion is important to us!!</p>

	<fieldset class="form-group">
		<label for="Name">First Name</label>
		<input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
	</fieldset>
	<fieldset class="form-group">
		<label for="Name">Last Name</label>
		<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
	</fieldset>
	<fieldset class="form-group">
		<label for="Date">Date of Submission</label>
		<input type="date" class="form-control" id="date" placeholder="Enter Date">
	</fieldset>
	<fieldset class="form-group">
		<label for="Email">Email</label>
		<input type="email" class="form-control" id="Email" placeholder="Enter Email">
	</fieldset>
	<small class="text-muted">We'll never share your email with anyone else.</small>
	<fieldset class="form-group">
		<label for="Textarea">Review Description</label>
		<textarea class="form-control" id="Textarea" rows="4"></textarea>
	</fieldset>
	<label for="Textarea">Ratings</label>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<div class="star-rating">
      <div class="star-rating__wrap">
        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
      </div>
    </div>
	<br/>
	<input type="submit" class="btn btn-success btn-lg marginTop" />
		</div>
		</div>	
	</div>
</div>
</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	$(".contentContainer").css("min-height",$(window).height());
	
	<button name="redirect" onClick="redirect()">
	document.getElementById("url").onclick=function redirect(){
	
    window.location = url;
	window.open(url);
	}
	
	</script>
</body>
</head>
</html>
